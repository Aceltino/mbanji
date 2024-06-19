<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SelfRequest extends Component
{
    public function render()
    {
        return view('livewire.self-request')->layout('layout.homeclient');
    }
}
