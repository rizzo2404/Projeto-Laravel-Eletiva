@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Cliente: {{ $customer->name }}</h2>
    <a href="{{ route('customers.index') }}" class="btn btn-secondary">Voltar</a>
</div>

<div class="card">
    <div class="card-body">
        <p><strong>Nome:</strong> {{ $customer->name }}</p>
        <p><strong>Email:</strong> {{ $customer->email ?? '—' }}</p>
        <p><strong>Telefone:</strong> {{ $customer->phone ?? '—' }}</p>
    </div>
</div>

<a href="{{ route('customers.edit', $customer) }}" class="btn btn-warning mt-3">Editar</a>
@endsection
