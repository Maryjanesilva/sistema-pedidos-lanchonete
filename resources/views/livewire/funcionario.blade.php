<div>
    <div>
        <h2 class="text-xl font-bold mb-4">Cadastro de Funcionários</h2>
    
        @if (session()->has('message'))
            <div class="bg-green-500 text-white p-2 mb-4">
                {{ session('message') }}
            </div>
        @endif
    
        <form wire:submit.prevent="createFuncionario" class="mb-4">
            <input type="text" wire:model="nome" placeholder="Nome" class="w-full p-2 border rounded mb-2">
            <input type="text" wire:model="cpf" placeholder="CPF" class="w-full p-2 border rounded mb-2">
            <input type="email" wire:model="email" placeholder="E-mail" class="w-full p-2 border rounded mb-2">
            <input type="password" wire:model="senha" placeholder="Senha" class="w-full p-2 border rounded mb-2">
            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Salvar Funcionário</button>
        </form>
    
        <h3 class="text-lg font-bold mb-2">Lista de Funcionários</h3>
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border p-2">Nome</th>
                    <th class="border p-2">CPF</th>
                    <th class="border p-2">E-mail</th>
                    <th class="border p-2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($funcionarios as $funcionario)
                    <tr>
                        <td class="border p-2">{{ $funcionario->nome }}</td>
                        <td class="border p-2">{{ $funcionario->cpf }}</td>
                        <td class="border p-2">{{ $funcionario->email }}</td>
                        <td class="border p-2">
                            <button wire:click="delete({{ $funcionario->id }})" class="bg-red-500 text-white p-1 rounded">Excluir</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</div>
