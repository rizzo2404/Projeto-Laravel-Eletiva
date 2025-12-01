@extends('layouts.app')
@section('title','Editar Categoria')
@section('content')
<h1>Editar Categoria</h1>
<form action="{{ route('categories.update',$category) }}" method="POST">@csrf @method('PUT')
  <div class="mb-3"><label class="form-label">Nome</label><input name="name" value="{{ $category->name }}" class="form-control" required></div>
  <div class="mb-3"><label class="form-label">Descrição</label><textarea name="description" class="form-control">{{ $category->description }}</textarea></div>
  <button class="btn btn-primary">Salvar</button>
</form>
@endsection
