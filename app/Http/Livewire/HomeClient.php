<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;

use Livewire\Component;

class HomeClient extends Component
{
    public function render()
    {
        if (!Session::get('token')) {
            Session::flush();
            return redirect()->route('login')->with('error', 'Faça o login!');
        }
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
