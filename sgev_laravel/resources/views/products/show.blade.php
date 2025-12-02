@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Produto: {{ $product->name }}</h2>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Voltar</a>
</div>

<div class="card">
    <div class="card-body">

        <p><strong>Nome:</strong> {{ $product->name }}</p>
        <p><strong>SKU:</strong> {{ $product->sku }}</p>
        <p><strong>Preço:</strong> R$ {{ number_format($product->price, 2, ',', '.') }}</p>
        <p><strong>Estoque:</strong> {{ $product->stock }}</p>

        <p><strong>Categoria:</strong>
            {{ $product->category->name ?? '—' }}
        </p>

        <p><strong>Fornecedor:</strong>
            {{ $product->supplier->name ?? '—' }}
        </p>

    </div>
</div>

<a href="{{ route('products.edit', $product) }}" class="btn btn-warning mt-3">Editar</a>
@endsection
