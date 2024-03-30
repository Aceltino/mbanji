<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TermosCondições extends Component
{
    public function render()
    {
        return view('livewire.termos-condições')->layout('layout.home');
    }
}
