<div>
    <h2>Sistema de Pedidos para Lanchonetes</h2>

    <!-- Cadastro de Cliente -->
    <h3>Cadastro de Clientes</h3>
    <form wire:submit.prevent="createCliente">
        <input type="text" wire:model="nome" placeholder="Nome">
        <input type="text" wire:model="endereco" placeholder="Endereço">
        <input type="text" wire:model="telefone" placeholder="Telefone">
        <input type="text" wire:model="cpf" placeholder="CPF">
        <input type="email" wire:model="email" placeholder="E-mail">
        <input type="password" wire:model="senha" placeholder="Senha">
        <button type="submit">Cadastrar Cliente</button>
    </form>

    <!-- Listagem de Clientes -->
    <h3>Lista de Clientes</h3>
    <table>
        <tr>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>CPF</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
        @foreach($clientes as $cliente)
        <tr>
            <td>{{ $cliente->nome }}</td>
            <td>{{ $cliente->endereco }}</td>
            <td>{{ $cliente->telefone }}</td>
            <td>{{ $cliente->cpf }}</td>
            <td>{{ $cliente->email }}</td>
            <td>
                <button wire:click="delete({{ $cliente->id }}, 'cliente')">Excluir</button>
            </td>
        </tr>
        @endforeach
    </table>

    <!-- Cadastro de Produto -->
    <h3>Cadastro de Produtos</h3>
    <form wire:submit.prevent="createProduto">
        <input type="text" wire:model="nome" placeholder="Nome do Produto">
        <input type="text" wire:model="ingredientes" placeholder="Ingredientes">
        <input type="number" wire:model="valor" placeholder="Valor">
        <input type="file" wire:model="imagem">
        <button type="submit">Cadastrar Produto</button>
    </form>

    <!-- Listagem de Produtos -->
    <h3>Lista de Produtos</h3>
    <table>
        <tr>
            <th>Nome</th>
            <th>Ingredientes</th>
            <th>Valor</th>
            <th>Imagem</th>
            <th>Ações</th>
        </tr>
        @foreach($produtos as $produto)
        <tr>
            <td>{{ $produto->nome }}</td>
            <td>{{ $produto->ingredientes }}</td>
            <td>{{ $produto->valor }}</td>
            <td>
                @if($produto->imagem)
                    <img src="{{ asset('storage/'.$produto->imagem) }}" width="50">
                @endif
            </td>
            <td>
                <button wire:click="delete({{ $produto->id }}, 'produto')">Excluir</button>
            </td>
        </tr>
        @endforeach
    </table>

    <!-- Cadastro de Pedido -->
    <h3>Realizar Pedido</h3>
    <form wire:submit.prevent="createPedido">
        <select wire:model="cliente_id">
            <option value="">Selecione o Cliente</option>
            @foreach($clientes as $cliente)
                <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
            @endforeach
        </select>

        <select wire:model="produto_id">
            <option value="">Selecione o Produto</option>
            @foreach($produtos as $produto)
                <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
            @endforeach
        </select>

        <select wire:model="forma_pagamento">
            <option value="Cartão de Crédito">Cartão de Crédito</option>
            <option value="Cartão de Débito">Cartão de Débito</option>
            <option value="Pix">Pix</option>
            <option value="Dinheiro">Dinheiro</option>
        </select>

        <input type="number" wire:model="valor_total" placeholder="Valor Total">
        <button type="submit">Finalizar Pedido</button>
    </form>

    <!-- Listagem de Pedidos -->
    <h3>Lista de Pedidos</h3>
    <table>
        <tr>
            <th>Cliente</th>
            <th>Valor Total</th>
            <th>Forma de Pagamento</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
        @foreach($pedidos as $pedido)
        <tr>
            <td>{{ $pedido->cliente->nome }}</td>
            <td>{{ $pedido->valor_total }}</td>
            <td>{{ $pedido->forma_pagamento }}</td>
            <td>{{ $pedido->status }}</td>
            <td>
                <button wire:click="delete({{ $pedido->id }}, 'pedido')">Cancelar Pedido</button>
            </td>
        </tr>
        @endforeach
    </table>
</div>

