@extends('layouts.app')
@section('title','Nova Categoria')
@section('content')
<h1>Nova Categoria</h1>
<form action="{{ route('categories.store') }}" method="POST">@csrf
  <div class="mb-3"><label class="form-label">Nome</label><input name="name" class="form-control" required></div>
  <div class="mb-3"><label class="form-label">Descrição</label><textarea name="description" class="form-control"></textarea></div>
  <button class="btn btn-primary">Salvar</button>
</form>
@endsection
