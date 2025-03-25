<?php

namespace App\Livewire;

use Livewire\Component;

class Pedido extends Component

{
    public $pedidos;

    public function render()
    {
        $this->pedidos = Pedido::all();
        return view('livewire.pedido', ['pedidos' => $this->pedidos]);
    }
}
