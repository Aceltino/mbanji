<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddBankDetails extends Component
{
    public function render()
    {
        return view('livewire.add-bank-details')->layout('layout.add-bank-details');;
    }
}
