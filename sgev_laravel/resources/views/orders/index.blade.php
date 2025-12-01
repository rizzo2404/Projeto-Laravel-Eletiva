@extends('layouts.app')
@section('title','Pedidos')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h1>Pedidos</h1>
  <a href="{{ route('orders.create') }}" class="btn btn-primary">Novo pedido</a>
</div>
<table class="table">
  <thead><tr><th>ID</th><th>Cliente</th><th>Total</th><th>Status</th><th>Data</th><th>Ações</th></tr></thead>
  <tbody>
  @foreach($orders as $o)
    <tr>
      <td>{{ $o->id }}</td>
      <td>{{ $o->customer?->name }}</td>
      <td>{{ number_format($o->total,2,',','.') }}</td>
      <td>{{ $o->status }}</td>
      <td>{{ $o->created_at->format('d/m/Y H:i') }}</td>
      <td>
        <a class="btn btn-sm btn-info" href="{{ route('orders.show',$o) }}">Ver</a>
        <form action="{{ route('orders.destroy',$o) }}" method="POST" style="display:inline">@csrf @method('DELETE')<button class="btn btn-sm btn-danger" onclick="return confirm('Excluir?')">Excluir</button></form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
{{ $orders->links() }}
@endsection
