<?php

namespace App\Livewire;

use Livewire\Component;

class Produto extends Component
{

    public $nome;
    public $descricao;
    public $preco;
    public $categoria;

    // Regras de validação
    protected $rules = [
        'nome' => 'required|string|max:255|unique:products,name',
        'descricao' => 'nullable|string|max:500',
        'preco' => 'required|numeric|min:0',
        'categoria' => 'required|string|max:255',
    ];

    // Mensagens de erro personalizadas
    protected $messages = [
        'name.unique' => 'Este produto já existe no cardápio.',
    ];

    public function render()
    {
        return view('livewire.produto');
    }

    public function store()
    {
        // Validar os dados antes de salvar
        $this->validate();

        // Criar o produto
        Produto::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'preco' => $this->preco,
            'categoria' => $this->categoria,
        ]);

        // Mensagem de sucesso
        session()->flash('success', 'Produto cadastrado com sucesso!');

        // Resetar os campos após o cadastro
        $this->reset();
    }
}
