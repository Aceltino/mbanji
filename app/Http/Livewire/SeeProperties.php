<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SeeProperties extends Component
{
    public function render()
    {
        return view('livewire.see-properties')->layout('layout.homeclient');
    }
}
