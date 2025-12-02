@extends('layouts.app')

@section('content')
<h2>Editar Pedido</h2>

<form action="{{ route('orders.update', $order) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Cliente</label>
        <select name="customer_id" class="form-control" required>
            @foreach($customers as $customer)
                <option value="{{ $customer->id }}"
                    @if($order->customer_id == $customer->id) selected @endif>
                    {{ $customer->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Total (R$)</label>
        <input type="number" name="total" step="0.01" class="form-control" value="{{ $order->total }}" required>
    </div>

    <button class="btn btn-primary">Salvar</button>
    <a href="{{ route('orders.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
