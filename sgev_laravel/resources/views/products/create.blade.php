@extends('layouts.app')
@section('title','Novo Produto')
@section('content')
<h1>Novo Produto</h1>
<form action="{{ route('products.store') }}" method="POST">
  @csrf
  <div class="mb-3"><label class="form-label">Nome</label><input name="name" class="form-control" required></div>
  <div class="mb-3"><label class="form-label">SKU</label><input name="sku" class="form-control" required></div>
  <div class="mb-3"><label class="form-label">Preço</label><input name="price" class="form-control" required></div>
  <div class="mb-3"><label class="form-label">Estoque</label><input name="stock" class="form-control" required></div>
  <div class="mb-3"><label class="form-label">Categoria</label>
    <select name="category_id" class="form-select">
      <option value=''>-- Nenhuma --</option>
      @foreach($categories as $c)<option value="{{ $c->id }}">{{ $c->name }}</option>@endforeach
    </select>
  </div>
  <div class="mb-3"><label class="form-label">Fornecedor</label>
    <select name="supplier_id" class="form-select">
      <option value=''>-- Nenhum --</option>
      @foreach($suppliers as $s)<option value="{{ $s->id }}">{{ $s->name }}</option>@endforeach
    </select>
  </div>
  <button class="btn btn-primary">Salvar</button>
</form>
@endsection
