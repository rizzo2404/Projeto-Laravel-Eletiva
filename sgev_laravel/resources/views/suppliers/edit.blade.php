@extends('layouts.app')

@section('content')
<h2>Editar Fornecedor</h2>

<form action="{{ route('suppliers.update', $supplier) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="text" class="form-control" name="name" value="{{ $supplier->name }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email" value="{{ $supplier->email }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Telefone</label>
        <input type="text" class="form-control" name="phone" value="{{ $supplier->phone }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Endereço</label>
        <textarea name="address" class="form-control">{{ $supplier->address }}</textarea>
    </div>

    <button class="btn btn-primary">Salvar</button>
    <a href="{{ route('suppliers.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
