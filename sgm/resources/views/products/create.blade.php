@extends('layouts.app')
@section('content')
<h3>Novo Produto</h3>
<form method="POST" action="{{ route('products.store') }}">@csrf
  <div><label>Nome: <input name="name" required></label></div>
  <div><label>SKU: <input name="sku"></label></div>
  <div><label>Categoria: <input name="category"></label></div>
  <div><label>Preço: <input name="price" required></label></div>
  <div><label>Quantidade: <input name="quantity" value="0" required></label></div>
  <div><label>Fornecedor: <select name="supplier_id"><option value="">--</option>@foreach($suppliers as $s)<option value="{{ $s->id }}">{{ $s->name }}</option>@endforeach</select></label></div>
  <div><button>Salvar</button> <a href="{{ route('products.index') }}">Cancelar</a></div>
</form>
@endsection
