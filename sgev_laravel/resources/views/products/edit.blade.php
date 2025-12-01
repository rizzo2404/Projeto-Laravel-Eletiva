@extends('layouts.app')
@section('title','Editar Produto')
@section('content')
<h1>Editar Produto</h1>
<form action="{{ route('products.update',$product) }}" method="POST">
  @csrf @method('PUT')
  <div class="mb-3"><label class="form-label">Nome</label><input name="name" value="{{ $product->name }}" class="form-control" required></div>
  <div class="mb-3"><label class="form-label">SKU</label><input name="sku" value="{{ $product->sku }}" class="form-control" required></div>
  <div class="mb-3"><label class="form-label">Preço</label><input name="price" value="{{ $product->price }}" class="form-control" required></div>
  <div class="mb-3"><label class="form-label">Estoque</label><input name="stock" value="{{ $product->stock }}" class="form-control" required></div>
  <div class="mb-3"><label class="form-label">Categoria</label>
    <select name="category_id" class="form-select">
      <option value=''>-- Nenhuma --</option>
      @foreach($categories as $c)<option value="{{ $c->id }}" @if($product->category_id==$c->id) selected @endif>{{ $c->name }}</option>@endforeach
    </select>
  </div>
  <div class="mb-3"><label class="form-label">Fornecedor</label>
    <select name="supplier_id" class="form-select">
      <option value=''>-- Nenhum --</option>
      @foreach($suppliers as $s)<option value="{{ $s->id }}" @if($product->supplier_id==$s->id) selected @endif>{{ $s->name }}</option>@endforeach
    </select>
  </div>
  <button class="btn btn-primary">Salvar</button>
</form>
@endsection
