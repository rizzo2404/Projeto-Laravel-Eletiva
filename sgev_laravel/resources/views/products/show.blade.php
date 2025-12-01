@extends('layouts.app')
@section('title','Produto')
@section('content')
<h1>Produto: {{ $product->name }}</h1>
<p><strong>SKU:</strong> {{ $product->sku }}</p>
<p><strong>Preço:</strong> {{ number_format($product->price,2,',','.') }}</p>
<p><strong>Estoque:</strong> {{ $product->stock }}</p>
<p><strong>Categoria:</strong> {{ $product->category?->name }}</p>
<p><strong>Fornecedor:</strong> {{ $product->supplier?->name }}</p>
<a href="{{ route('products.index') }}" class="btn btn-secondary">Voltar</a>
@endsection
