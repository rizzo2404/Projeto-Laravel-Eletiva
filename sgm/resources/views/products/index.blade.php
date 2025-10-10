@extends('layouts.app')
@section('title','Produtos')
@section('content')
<h3>Produtos <a href="{{ route('products.create') }}">[Novo]</a></h3>
<table border="1" cellpadding="6" cellspacing="0">
  <thead><tr><th>ID</th><th>Nome</th><th>Preço</th><th>Qtd</th><th>Fornecedor</th><th>Ações</th></tr></thead>
  <tbody>
  @foreach($products as $p)
    <tr>
      <td>{{ $p->id }}</td>
      <td>{{ $p->name }}</td>
      <td>{{ number_format($p->price,2,',','.') }}</td>
      <td>{{ $p->quantity }}</td>
      <td>{{ $p->supplier?->name }}</td>
      <td><a href="{{ route('products.show',$p) }}">Ver</a> | <a href="{{ route('products.edit',$p) }}">Editar</a> | <form style="display:inline" method="POST" action="{{ route('products.destroy',$p) }}">@csrf @method('DELETE')<button onclick="return confirm('Excluir?')">X</button></form></td>
    </tr>
  @endforeach
  </tbody>
</table>
{{ $products->links() }}
@endsection
