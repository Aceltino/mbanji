<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Session;

use Livewire\Component;

class HomeAdmin extends Component
{
    public function render()
    {
        if (!Session::get('token')) {
            Session::flush();
            return redirect()->route('login')->with('error', 'Faça o login!');
        }
        return view('livewire.home-admin')->layout('layout.homeadmin');;
    }
}
