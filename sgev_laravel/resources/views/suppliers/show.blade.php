@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Fornecedor: {{ $supplier->name }}</h2>
    <a href="{{ route('suppliers.index') }}" class="btn btn-secondary">Voltar</a>
</div>

<div class="card">
    <div class="card-body">
        <p><strong>Nome:</strong> {{ $supplier->name }}</p>
        <p><strong>Email:</strong> {{ $supplier->email ?? '—' }}</p>
        <p><strong>Telefone:</strong> {{ $supplier->phone ?? '—' }}</p>
        <p><strong>Endereço:</strong> {{ $supplier->address ?? '—' }}</p>
    </div>
</div>

<a href="{{ route('suppliers.edit', $supplier) }}" class="btn btn-warning mt-3">Editar</a>
@endsection
