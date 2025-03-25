<?php

namespace App\Livewire;

use Livewire\Component;

class Funcionario extends Component
{
    public $funcionario;
    public function render()
    {
        $this->funcionario = Funcionario::all();
        return view('livewire.funcionario', ['funcionarios' => $this->funcionarios]);
    }
}
