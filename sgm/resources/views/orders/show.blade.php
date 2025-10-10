@extends('layouts.app') @section('content')
<h3>Ordem #{{ $order->id }}</h3>
<p>Cliente: {{ $order->customer?->name }}</p>
<p>Total: {{ number_format($order->total,2,',','.') }}</p>
<p>Status: {{ $order->status }}</p>
<h4>Itens</h4>
<table border="1" cellpadding="6"><thead><tr><th>Produto</th><th>Qtd</th><th>Unit.</th><th>Subtotal</th></tr></thead><tbody>
@foreach($order->items as $it)<tr><td>{{ $it->product?->name }}</td><td>{{ $it->quantity }}</td><td>{{ number_format($it->unit_price,2,',','.') }}</td><td>{{ number_format($it->subtotal,2,',','.') }}</td></tr>@endforeach
</tbody></table>
<p><a href="{{ route('orders.index') }}">Voltar</a></p>
@endsection
