<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Illuminate\Support\Facades\Session;
class Login extends Component
{
    public $user;
    public $password;

    public function getLogin()
    {
        $response = Http::post('http://u_mbanji.test/api/login', [
            "user"=> $this->user,
            "password"=> $this->password
        ]);

        $retorno = $response->json();
        // dd($response->status(), $retorno);
        switch ($response->status())
        {
            case 200:
                // Session::put('config', $retorno['config']);
                Session::put('acesso', $retorno['userData']['level_access']);
                Session::put('nome', $retorno['userData']['name']);
                Session::put('id', $retorno['userData']['personal_id']);
                Session::put('token', $retorno['token']);
                Session::put('imgUser', $retorno['img'] ?? []);


                if($retorno['userData']['level_access'] == 1)
                {
                return redirect()->route('admin');
                }
                return redirect()->route('client');
                break;
            case 401:
                session()->flash('error', $retorno['message']);
                break;
            default:
            session()->flash('error', 'Erro no servidor, contacte o provedor do sistema!');
        }
    }

    public function mount()
    {
        if (Session::get('token'))
        {
            if(Session::get('token')== 1)
            {
            return redirect()->route('admin');
            }
            return redirect()->route('client');
        }
    }

    public function render()
    {
        return view('livewire.login')->layout('layout.login');;
    }
}
