@extends('layouts.app')
@section('title','Produtos')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h1>Produtos</h1>
  <a href="{{ route('products.create') }}" class="btn btn-primary">Novo produto</a>
</div>
<table class="table table-striped">
  <thead><tr><th>SKU</th><th>Nome</th><th>Preço</th><th>Estoque</th><th>Categoria</th><th>Ações</th></tr></thead>
  <tbody>
  @foreach($products as $p)
    <tr>
      <td>{{ $p->sku }}</td>
      <td>{{ $p->name }}</td>
      <td>{{ number_format($p->price,2,',','.') }}</td>
      <td>{{ $p->stock }}</td>
      <td>{{ $p->category?->name }}</td>
      <td>
        <a class="btn btn-sm btn-info" href="{{ route('products.show',$p) }}">Ver</a>
        <a class="btn btn-sm btn-warning" href="{{ route('products.edit',$p) }}">Editar</a>
        <form action="{{ route('products.destroy',$p) }}" method="POST" style="display:inline">
          @csrf @method('DELETE')
          <button class="btn btn-sm btn-danger" onclick="return confirm('Excluir?')">Excluir</button>
        </form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
{{ $products->links() }}
@endsection
