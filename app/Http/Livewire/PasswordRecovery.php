<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Session;

use Livewire\Component;

class PasswordRecovery extends Component
{
    public function render()
    {
        if (Session::get('token'))
        {
            if(Session::get('token')== 1)
            {
            return redirect()->route('admin');
            }
            return redirect()->route('client');
        }
        return view('livewire.password-recovery')->layout('layout.password-recovery');
    }
}
