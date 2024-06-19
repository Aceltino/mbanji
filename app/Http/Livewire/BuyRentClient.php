<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class BuyRentClient extends Component
{
    public $propriedadeOne = [];
    public $propriedades = [];
    public $propriedadesFiltro = [];
    public $dateAndTime = "";
    public $dateAndTimeOut;
    public $precoPropriedade = '';
    public $quantity = "";


    public $page = 1;
    public $pageFiltro = 1;
    protected $listeners = ['mount', 'save', 'refresh'];

    public $total = '';
    public $contrato = null;
    public $tipo = null;
    public $provincia = null;
    public $municipio = null;
    public $quarto = null;
    public $tempo = null;
    public $preco = null;
    public $in = 0;
    public $token;
    public $propiedadeID;

    public $time1;
    public $unityTime;


    // public function __construct()
    // {
    //     $this->dateAndTime = date("Y-m-d H:i:s");
    // }

    public function loadMore($param = null)
    {
        $this->page++;

        $response = Http::post('http://u_mbanji.test/api/show-all-property', [
            'page' => $this->page,
        ]);
        $this->in = 0;

        $properties = $response->json();

        if (!empty($properties['properties'])) {
            $this->propriedades['properties'] = array_merge($this->propriedades['properties'], $properties['properties']);
        }

        // dd( $this->propriedades['properties'], $this->propriedades);
    }

    public function solicitarCasa()
    {
    }

    public function filtro()
    {

        if (($this->contrato == "" || $this->contrato == null) && ($this->tipo == "" || $this->tipo == null) && ($this->provincia == "" || $this->provincia == null) && ($this->municipio == "" || $this->municipio == null) && ($this->preco == "" || $this->preco == null) && ($this->quarto == "" || $this->quarto == null) && ($this->tempo == "" || $this->tempo == null)) {
            $this->page = 1;
            $this->pageFiltro = 1;
            $this->propriedades = [];
            // $this->mount();
            // $this->redirect(route('buyrent'));
        }

        $this->page = 1;
        $this->pageFiltro = 1;
        $this->propriedades = [];

        $response = Http::post('http://u_mbanji.test/api/show-all-property-filter', [
            'page' => $this->page,
            'contract' => $this->contrato,
            'property_type' => $this->tipo,
            'province' => $this->provincia,
            'municipality' => $this->municipio,
            'priceProperty' => $this->preco,
            'property_bedRoom' => $this->quarto,
            'unity_time' => $this->tempo,
        ]);
        $this->propriedades = $response->json();

        if ($response->status() == 409) {
            $this->propriedades = [];

            $this->contrato = "";
            $this->tipo = "";
            $this->provincia = "";
            $this->municipio = "";
            $this->preco = "";
            $this->quarto = "";
            $this->tempo = "";

            $this->dispatchBrowserEvent('error');
        }
    }

    public function mount()
    {
        if (!Session::get('token')) {
            Session::flush();
            return redirect()->route('login.user')->with('error', 'Faça o login!');
        }

        $this->token = Session::get('token');
        $response = Http::withToken($this->token)->post('http://u_mbanji.test/api/show-all-property');

        if ($response->successful()) {
            $this->propriedades = $response->json();
            return;
        }
        return redirect()->route('login')->with('error', 'Faça o login!');
    }

    public function pegarPropriedade($propriedade)
    {
        $this->propiedadeID = $propriedade;
        $this->precoPropriedade = '';
        $response = Http::post('http://u_mbanji.test/api/show-property', [
            "id" => $propriedade,
        ]);

        $retorno = $response->json();
        $this->propriedadeOne = $retorno['body'];
        // dd($this->propriedadeOne);
    }

    public function rules()
    {
        return [
            'dateAndTime' => 'nullable|date', // 'nullable' permite que o campo seja vazio
        ];
    }

    public function setEstadia()
    {
        $parts = explode('!', $this->quantity);

        $this->time1 = $parts[0];
        $preco = preg_replace("/[^0-9,.]/", "", $parts[2]);
        $total = $parts[1] * intval($preco);
        $total_kzs = number_format($total, 2, ',', '.') . " Kz"; // 2 casas decimais
        $this->total = $total_kzs;
        $this->dateAndTime = now()->format('Y-m-d\TH:i');
    }

    public function render()
    {
        return view('livewire.buy-rent-client')->layout('layout.homeclient');;
    }

    public function save()
    {

        // 'datetime_in' => 'required|date_format:Y-m-d H:i:s',
        // 'datetime_out' => 'required|date_format:Y-m-d H:i:s',
        // 'proprietary_id' => 'required|int',
        // 'contract' => 'required|int',
        // 'unity_time' => 'required|int',
        // 'price' => 'required|int',
        // 'property_id' => 'required|int'
        // dd();
        if($this->dateAndTimeOut == null)
        {
            $dataFim = null;
            $this->dateAndTime = null;
        }
        else{
            $dataFim = $this->dateAndTimeOut->toDateTimeString();
        }

        // dd(
        //     $this->dateAndTime,
        //     $dataFim,
        //     $this->propriedadeOne['proprietary_id'],
        //     $this->contrato,
        //     $this->unityTime,
        //     intval(preg_replace("/[^0-9,.]/", "", $this->total)),
        //     $this->propiedadeID,
        // );

        $response = Http::withToken($this->token)
            ->post('http://u_mbanji.test/api/register-deal', [
                "datetime_in" => $this->dateAndTime,
                "datetime_out" => $dataFim,
                "proprietary_id" => $this->propriedadeOne['proprietary_id'],
                "contract" => $this->contrato,
                "unity_time" => $this->unityTime,
                "price" => intval(preg_replace("/[^0-9,.]/", "", $this->total)),
                "property_id" => $this->propiedadeID,
            ]);

        // dd($response, $response->json());

        $retorno = $response->json();

        switch ($response->status())
        {
            case 401:
                Session::flush();
                return redirect()->route('login')->with('error', 'Faça o login!');
                break;
            case 409:
                $this->dispatchBrowserEvent('aviso', ['mensagemErro' => $retorno['message']]);
                break;
            case 201:
                $this->dispatchBrowserEvent('certo', ['mensagemErro1' => 'Solicitação enviada, acompanhe o pedido em solicitações!']);
                default:
            session()->flash('error', 'Erro no sistema, contacte o provedor do sistema!');
        }
    }

}
