<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class BuyRent extends Component
{
    public $propriedadeOne = [];
    public $propriedades = [];
    public $propriedadesFiltro = [];


    public $precoPropriedade = '';

    public $page = 1;
    public $pageFiltro = 1;
    protected $listeners = ['mount'];


    public $contrato = null;
    public $tipo = null;
    public $provincia = null;
    public $municipio = null;
    public $quarto = null;
    public $tempo = null;
    public $preco = null;
    public $in = 0;

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
            // $this->mount();

            // $this->emit('error');
        }

    }

    public function mount()
    {
        if (Session::get('token')) {
            if (Session::get('token') == 1) {
                return redirect()->route('admin');
            } else {
                return redirect()->route('client');
            }
        }

        $response = Http::withToken(Session::get('token'))->post('http://u_mbanji.test/api/show-all-property');
        $this->propriedades = $response->json();
        // dd($this->propriedades);
    }
    public function render()
    {
        return view('livewire.buy-rent')->layout('layout.buy-rent');
    }

    public function pegarPropriedade($propriedade)
    {
        $response = Http::post('http://u_mbanji.test/api/show-property', [
            "id" => $propriedade,
        ]);

        $retorno = $response->json();
        $this->propriedadeOne = $retorno['body'];
        // dd($this->propriedadeOne);
    }
}
