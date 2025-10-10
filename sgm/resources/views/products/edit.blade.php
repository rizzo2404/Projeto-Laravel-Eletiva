@extends('layouts.app')
@section('content')
<h3>Editar Produto</h3>
<form method="POST" action="{{ route('products.update',$product) }}">@csrf @method('PUT')
  <div><label>Nome: <input name="name" value="{{ $product->name }}" required></label></div>
  <div><label>SKU: <input name="sku" value="{{ $product->sku }}"></label></div>
  <div><label>Categoria: <input name="category" value="{{ $product->category }}"></label></div>
  <div><label>Preço: <input name="price" value="{{ $product->price }}" required></label></div>
  <div><label>Quantidade: <input name="quantity" value="{{ $product->quantity }}" required></label></div>
  <div><label>Fornecedor: <select name="supplier_id"><option value="">--</option>@foreach($suppliers as $s)<option value="{{ $s->id }}" @if($product->supplier_id==$s->id) selected @endif>{{ $s->name }}</option>@endforeach</select></label></div>
  <div><button>Salvar</button> <a href="{{ route('products.index') }}">Cancelar</a></div>
</form>
@endsection
