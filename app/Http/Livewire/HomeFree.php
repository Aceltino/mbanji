<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;

use Livewire\Component;



class HomeFree extends Component
{
    public $propriedades = [];
    public $propriedadeOne = [];
    public $precoPropriedade = '';

    public function mount()
    {
        if (Session::get('token'))
        {
            if (Session::get('token') == 1)
            {
                return redirect()->route('admin');
            } else
            {
                return redirect()->route('client');
            }
        }

        $response = Http::get('http://u_mbanji.test/api/show-firstten');
        $this->propriedades = $response->json();
        // dd($this->propriedades);
    }
    public function render()
    {
        return view('livewire.home-free')->layout('layout.home');
    }

    public function pegarPropriedade($propriedade)
    {
        $response = Http::post('http://u_mbanji.test/api/show-property', [
            "id"=> $propriedade,
        ]);

        $retorno = $response->json();
        $this->propriedadeOne = $retorno['body'];
        // dd($this->propriedadeOne);
    }


    public function atualizarDados()
    {
        // dd($this->precoPropriedade);
    }


}
