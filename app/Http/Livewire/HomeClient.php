<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use App\Jobs\ProcessSaveJob;


use Livewire\Component;

class HomeClient extends Component
{
    use WithFileUploads;

    public $photoDoc;
    public $otherPics = [];
    public $mainImage;
    public $descInput = [];
    public $debInput = [];
    public $precario = [];

    public $propertyType;
    public $province;
    public $municipe;
    public $agua;
    public $energia;
    public $estrada;

    public $propertyState;
    public $street;
    public $description;

    public $check;
    public $numberOfRooms;
    public $array = [];
    public $refresh = false; // Defina a propriedade $refresh aqui

    public $mensagemErro = '';
    public $token;

    public $mainImagePath;
    public $photoDocPath;
    public $otherPics1 = [] ;
    public $isLoading = true;



    protected $listeners = ['adicionarDebilidade', 'removerDebilidade', 'adicionarDescricao', 'removerDescricao',  'adicionarPrecario', 'removerPrecario', 'refresh'];

    protected $rules = [
        'mainImage' => 'required|image|max:1024',
        'otherPics' => 'max:5',
        'otherPics.' => 'image|max:1024',
        'precario.*' => 'required',
        'province' => 'required',
        'municipe' => 'required',
        'street' => 'required',
        'check' => 'required',
    ];
    protected $messages = [
        '*.required' => 'Deves preencher este campo!',
        '*.image' => 'O arquivo deve ser uma imagem.',
        '*.max' => 'Não pode exceder 1MB || Não pode selecionar mais de 5 imagens',
    ];
    public function updated($propertyName)
    {
        // Verificar se a mudança foi nos campos do array precario
        if (str_starts_with($propertyName, 'precario')) {
            // dd();
            $this->validatePrecario();
        } else {
            // Validar apenas o campo que foi alterado
            $this->validateOnly($propertyName);
        }
    }

    protected function validatePrecario()
    {
        $rules = [];

        foreach ($this->precario as $index => $item) {
            $rules["precario.$index.contract"] = 'required';
            $rules["precario.$index.money"] = 'required';

            if ($item['contract'] == 1) {
                $rules["precario.$index.time"] = 'nullable';
                $rules["precario.$index.unity"] = 'nullable';
            } else {
                $rules["precario.$index.time"] = 'required';
                $rules["precario.$index.unity"] = 'required';
            }
        }

        $this->rules = $rules;
        // $this->validate();
    }

    // public function avisoNotificationStatus()
    // {
    //     $this->dispatchBrowserEvent('aviso', ['mensagemErro' => 'Notificaremos assim que estiver carregada! Carregando...']);
    //     dd();
    // }

    public function save()
    {
        $this->validate();
        $this->validatePrecario();
        // $this->dispatchBrowserEvent('aviso', ['mensagemErro' => 'Notificaremos assim que estiver carregada! Carregando...']);

        $this->mainImagePath = $this->mainImage->store('temp');
        $mainImageName = $this->mainImage->getClientOriginalName();

        if (!empty($this->otherPics)) {
            foreach ($this->otherPics as $img) {
                $this->otherPics1[] = [
                "path" => $img->store('temp'),
                "name" => $img->getClientOriginalName()
                ];
            }
        }

        ProcessSaveJob::dispatchNow(
            $this->mainImagePath,
            $mainImageName,
            $this->propertyType,
            $this->street,
            $this->description,
            $this->municipe,
            $this->agua,
            $this->energia,
            $this->estrada,
            $this->precario,
            $this->otherPics,
            $this->otherPics1 ?? [],
            $this->token
        );
        $this->refresh();
        $this->dispatchBrowserEvent('certo', ['mensagemErro' => 'Propriedade registrada com sucesso!']);
    }


    public function adicionarDescricao()
    {
        $this->descInput[] = '';
    }

    public function removerDescricao($index)
    {
        unset($this->descInput[$index]);
    }

    public function adicionarDebilidade()
    {
        $this->debInput[] = '';
    }

    public function removerDebilidade($index)
    {
        unset($this->debInput[$index]);
    }

    public function adicionarPrecario()
    {
        $this->precario[] = [
            'contract' => null,
            'money' => null,
            'time' => null,
            'unity' => null,
        ];
        $this->refresh = true;
        // return;
    }

    public function removerPrecario($index)
    {
        unset($this->precario[$index]);
        $this->precario = array_values($this->precario); // Reindexa o array após a remoção
    }

    public function contractFunction($index)
    {
        $hasValueOne = collect($this->precario)->filter(function ($item, $idx) use ($index) {
            return $idx !== $index && $item['contract'] == 1;
        })->isNotEmpty();

        if ($this->precario[$index]['contract'] == 1 && $hasValueOne) {
            $this->precario[$index]['contract'] = null;
            $this->dispatchBrowserEvent('error', ['mensagemErro' => 'Não pode selecionar esta opção mais de uma vez!']);
        }
    }

    public function unitytFunction($index)
    {
        // Verifica se a opção atual já foi selecionada antes
        $currentOption = $this->precario[$index]['unity'];
        foreach ($this->precario as $idx => $item) {
            if ($idx !== $index && $item['unity'] === $currentOption) {
                // Se a opção já foi selecionada anteriormente, limpa a seleção atual
                $this->precario[$index]['unity'] = null;
                $this->dispatchBrowserEvent('error', ['mensagemErro' => 'Não pode selecionar esta opção mais de uma vez!']);
                return; // Sai da função após emitir o evento de erro
            }
        }
    }

    public function validarMoney($index)
    {
        if ($this->precario[$index]['money'] < 500) {
            $this->dispatchBrowserEvent('error', ['mensagemErro' => 'Quantia muito baixa, altere o valor!']);
            $this->precario[$index]['money'] = 500;
        }
    }

    public function mount()
    {
        if (!Session::get('token')) {
            Session::flush();
            return redirect()->route('login.user')->with('error', 'Faça o login!');
        }

        $this->token = Session::get('token');
        $this->precario[] = [
            'contract' => null,
            'money' => null,
            'time' => null,
            'unity' => null,
        ];

    }

    public function refresh()
    {
        redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.home-client')->layout('layout.homeclient');
    }

    public function logout()
    {
        $response = Http::withToken(Session::get('token'))->get('http://u_mbanji.test/api/logout');
        // return dd($response);deslogar
        Session::flush();
        return redirect()->route('home');
    }
}
