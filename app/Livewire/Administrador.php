<?php

namespace App\Livewire;

use Livewire\Component;

class Administrador extends Component
{
    public $administrador;
    public function render()
    {
        $this->administrador = Administrador::all();
        return view('livewire.administrador', ['administradores' => $this->administrador]);
    }
}
