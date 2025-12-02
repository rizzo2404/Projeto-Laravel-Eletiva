@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Pedido #{{ $order->id }}</h2>
    <a href="{{ route('orders.index') }}" class="btn btn-secondary">Voltar</a>
</div>

<div class="card">
    <div class="card-body">

        <p><strong>Cliente:</strong> {{ $order->customer->name }}</p>

        <p><strong>Data:</strong>
            {{ $order->created_at->format('d/m/Y H:i') }}
        </p>

        <p><strong>Total:</strong>
            R$ {{ number_format($order->total, 2, ',', '.') }}
        </p>

    </div>
</div>

<a href="{{ route('orders.edit', $order) }}" class="btn btn-warning mt-3">Editar</a>

@endsection
