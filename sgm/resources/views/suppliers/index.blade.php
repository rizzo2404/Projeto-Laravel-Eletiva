@extends('layouts.app')
@section('title','Fornecedores')
@section('content')
<h3>Fornecedores <a href="{{ route('suppliers.create') }}">[Novo]</a></h3>
<table border="1" cellpadding="6" cellspacing="0">
  <thead>
    <tr><th>ID</th><th>Nome</th><th>Telefone</th><th>CNPJ</th><th>Ações</th></tr>
  </thead>
  <tbody>
    @foreach($suppliers as $s)
    <tr>
      <td>{{ $s->id }}</td>
      <td>{{ $s->name }}</td>
      <td>{{ $s->phone }}</td>
      <td>{{ $s->cnpj }}</td>
      <td>
        <a href="{{ route('suppliers.show',$s) }}">Ver</a> |
        <a href="{{ route('suppliers.edit',$s) }}">Editar</a> |
        <form method="POST" action="{{ route('suppliers.destroy',$s) }}" style="display:inline">
          @csrf @method('DELETE')
          <button onclick="return confirm('Excluir este fornecedor?')">X</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $suppliers->links() }}
@endsection
