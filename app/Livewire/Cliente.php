<?php

namespace App\Livewire;

use Livewire\Component;

class Cliente extends Component
{
    public $clientes;
    public function render()
    {
            $this->clientes = Cliente::all();
                 return view('livewire.cliente', ['clientes' => $this->clientes]);
    }
}
