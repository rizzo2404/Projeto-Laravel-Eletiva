@extends('layouts.app')
@section('content')
<h3>Produto: {{ $product->name }}</h3>
<p>SKU: {{ $product->sku }}</p>
<p>Categoria: {{ $product->category }}</p>
<p>Preço: {{ number_format($product->price,2,',','.') }}</p>
<p>Quantidade: {{ $product->quantity }}</p>
<p>Fornecedor: {{ $product->supplier?->name }}</p>
<p><a href="{{ route('products.index') }}">Voltar</a></p>
@endsection
