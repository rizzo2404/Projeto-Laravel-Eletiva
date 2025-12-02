@extends('layouts.app')

@section('content')
<h2>Editar Cliente</h2>

<form action="{{ route('customers.update', $customer) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="text" name="name" class="form-control" value="{{ $customer->name }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{ $customer->email }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Telefone</label>
        <input type="text" name="phone" class="form-control" value="{{ $customer->phone }}">
    </div>

    <button class="btn btn-primary">Salvar</button>
    <a href="{{ route('customers.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
