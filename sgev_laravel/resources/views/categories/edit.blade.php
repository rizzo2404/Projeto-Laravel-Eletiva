@extends('layouts.app')

@section('content')
<h2>Editar Categoria</h2>

<form action="{{ route('categories.update', $category) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Descrição</label>
        <textarea name="description" class="form-control">{{ $category->description }}</textarea>
    </div>

    <button class="btn btn-primary">Salvar</button>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
