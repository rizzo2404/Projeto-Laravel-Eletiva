@extends('layouts.app')
@section('title','Categorias')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h1>Categorias</h1>
  <a href="{{ route('categories.create') }}" class="btn btn-primary">Nova categoria</a>
</div>
<table class="table">
  <thead><tr><th>Nome</th><th>Ações</th></tr></thead>
  <tbody>
  @foreach($categories as $c)
    <tr>
      <td>{{ $c->name }}</td>
      <td>
        <a class="btn btn-sm btn-info" href="{{ route('categories.show',$c) }}">Ver</a>
        <a class="btn btn-sm btn-warning" href="{{ route('categories.edit',$c) }}">Editar</a>
        <form action="{{ route('categories.destroy',$c) }}" method="POST" style="display:inline">@csrf @method('DELETE')<button class="btn btn-sm btn-danger" onclick="return confirm('Excluir?')">Excluir</button></form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
{{ $categories->links() }}
@endsection
