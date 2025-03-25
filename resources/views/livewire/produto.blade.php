<div>
    <h2>Cadastrar Produto</h2>

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="store">
        <!-- Nome do Produto -->
        <div class="form-group">
            <label for="name">Nome do Produto</label>
            <input type="text" id="name" class="form-control" wire:model="name" required>
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- Descrição do Produto -->
        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea id="description" class="form-control" wire:model="description"></textarea>
            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- Preço -->
        <div class="form-group">
            <label for="price">Preço</label>
            <input type="number" id="price" class="form-control" wire:model="price" required step="0.01">
            @error('price') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- Categoria -->
        <div class="form-group">
            <label for="category">Categoria</label>
            <input type="text" id="category" class="form-control" wire:model="category" required>
            @error('category') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- Botão de Enviar -->
        <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
    </form>
</div>
