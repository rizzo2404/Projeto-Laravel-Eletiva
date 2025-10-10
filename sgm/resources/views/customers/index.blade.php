@extends('layouts.app')
@section('title','Clientes')
@section('content')
<h3>Clientes <a href="{{ route('customers.create') }}">[Novo]</a></h3>
<table border="1" cellpadding="6" cellspacing="0">
  <thead>
    <tr><th>ID</th><th>Nome</th><th>Telefone</th><th>Email</th><th>Ações</th></tr>
  </thead>
  <tbody>
    @foreach($customers as $c)
    <tr>
      <td>{{ $c->id }}</td>
      <td>{{ $c->name }}</td>
      <td>{{ $c->phone }}</td>
      <td>{{ $c->email }}</td>
      <td>
        <a href="{{ route('customers.show',$c) }}">Ver</a> |
        <a href="{{ route('customers.edit',$c) }}">Editar</a> |
        <form method="POST" action="{{ route('customers.destroy',$c) }}" style="display:inline">
          @csrf @method('DELETE')
          <button onclick="return confirm('Excluir este cliente?')">X</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $customers->links() }}
@endsection

