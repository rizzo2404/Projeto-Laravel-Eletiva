@extends('layouts.app')
@section('title','Pedido')
@section('content')
<h1>Pedido #{{ $order->id }}</h1>
<p><strong>Cliente:</strong> {{ $order->customer?->name ?? '---' }}</p>
<p><strong>Total:</strong> {{ number_format($order->total,2,',','.') }}</p>
<p><strong>Status:</strong> {{ $order->status }}</p>
<h4>Itens</h4>
<table class="table">
  <thead><tr><th>Produto</th><th>Quantidade</th><th>Preço Unit.</th></tr></thead>
  <tbody>
  @foreach($order->items as $it)
    <tr>
      <td>{{ $it->product?->name }}</td>
      <td>{{ $it->quantity }}</td>
      <td>{{ number_format($it->unit_price,2,',','.') }}</td>
    </tr>
  @endforeach
  </tbody>
</table>
<a href="{{ route('orders.index') }}" class="btn btn-secondary">Voltar</a>
@endsection
