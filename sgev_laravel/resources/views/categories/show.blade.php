@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Categoria: {{ $category->name }}</h2>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Voltar</a>
</div>

<div class="card">
    <div class="card-body">
        <p><strong>Nome:</strong> {{ $category->name }}</p>
        <p><strong>Descrição:</strong> {{ $category->description ?? '—' }}</p>
    </div>
</div>

<a href="{{ route('categories.edit', $category) }}" class="btn btn-warning mt-3">Editar</a>
@endsection
