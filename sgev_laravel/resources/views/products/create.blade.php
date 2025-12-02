@extends('layouts.app')

@section('content')
<h2>Novo Produto</h2>

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">SKU</label>
        <input type="text" name="sku" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Preço</label>
        <input type="number" step="0.01" name="price" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Estoque</label>
        <input type="number" name="stock" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Categoria</label>
        <select name="category_id" class="form-control">
            <option value="">Selecione</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Fornecedor</label>
        <select name="supplier_id" class="form-control">
            <option value="">Selecione</option>
            @foreach($suppliers as $supplier)
                <option value="{{ $supplier->id }}">
                    {{ $supplier->name }}
                </option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-primary">Salvar</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
