@extends('layouts.app')

@section('content')
<h2>Editar Produto</h2>

<form action="{{ route('products.update', $product) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">SKU</label>
        <input type="text" name="sku" class="form-control" value="{{ $product->sku }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Preço</label>
        <input type="number" step="0.01" name="price" class="form-control" value="{{ $product->price }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Estoque</label>
        <input type="number" name="stock" class="form-control" value="{{ $product->stock }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Categoria</label>
        <select name="category_id" class="form-control">
            <option value="">Selecione</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}"
                    @if($product->category_id == $category->id) selected @endif>
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
                <option value="{{ $supplier->id }}"
                    @if($product->supplier_id == $supplier->id) selected @endif>
                    {{ $supplier->name }}
                </option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-primary">Salvar</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancelar</a>

</form>
@endsection
