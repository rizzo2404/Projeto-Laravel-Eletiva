@extends('layouts.app') @section('content')
<h3>Ordens <a href="{{ route('orders.create') }}">[Nova OS]</a></h3>
<table border="1" cellpadding="6"><thead><tr><th>ID</th><th>Cliente</th><th>Total</th><th>Status</th><th>Data</th><th>Ações</th></tr></thead><tbody>
@foreach($orders as $o)<tr><td>{{ $o->id }}</td><td>{{ $o->customer?->name }}</td><td>{{ number_format($o->total,2,',','.') }}</td><td>{{ $o->status }}</td><td>{{ $o->created_at->format('d/m/Y') }}</td><td><a href="{{ route('orders.show',$o) }}">Ver</a> | <form style="display:inline" method="POST" action="{{ route('orders.destroy',$o) }}">@csrf @method('DELETE')<button onclick="return confirm('Excluir?')">X</button></form></td></tr>@endforeach
</tbody></table>{{ $orders->links() }} @endsection
