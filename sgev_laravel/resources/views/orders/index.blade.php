@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Pedidos</h2>
    <a href="{{ route('orders.create') }}" class="btn btn-primary">Novo Pedido</a>
</div>

<table class="table table-bordered table-striped">
    <thead class="table-light">
        <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Data</th>
            <th>Total</th>
            <th width="180">Ações</th>
        </tr>
    </thead>

    <tbody>
        @foreach($orders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->customer->name }}</td>
            <td>{{ $order->created_at->format('d/m/Y H:i') }}</td>
            <td>R$ {{ number_format($order->total, 2, ',', '.') }}</td>

            <td>
                <a href="{{ route('orders.show', $order) }}" class="btn btn-sm btn-secondary">Ver</a>
                <a href="{{ route('orders.edit', $order) }}" class="btn btn-sm btn-warning">Editar</a>

                <form action="{{ route('orders.destroy', $order) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-sm btn-danger" onclick="return confirm('Excluir este pedido?')">
                        Excluir
                    </button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>

{{ $orders->links() }}
@endsection
