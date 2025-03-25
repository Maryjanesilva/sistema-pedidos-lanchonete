<?php

use App\Livewire\Administrador;
use App\Livewire\Cliente;
use App\Livewire\Funcionario;
use App\Livewire\Pedido;
use App\Livewire\Produto;
use App\Models\administradores;
use App\Models\funcionarios;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', Cliente::class)->name('clientes.index');
Route::get('/produtos', Produto::class)->name('produtos.index');
Route::get('/funcionario', Funcionario::class)->name('funcionarios.index');
Route::get('/administradores', Administrador::class)->name('administradores.index');
Route::get('/pedidos', Pedido::class)->name('pedidos.index');