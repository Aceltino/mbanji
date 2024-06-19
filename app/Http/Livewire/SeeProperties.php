<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;


class SeeProperties extends Component
{
    public function mount()
    {
        if (!Session::get('token'))
        {
            Session::flush();
            return redirect()->route('login.user')->with('error', 'Faça o login!');
        }
    }
    public function render()
    {
        return view('livewire.see-properties')->layout('layout.homeclient');
    }
}
