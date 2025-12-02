@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Categorias</h2>
    <a href="{{ route('categories.create') }}" class="btn btn-primary">Nova Categoria</a>
</div>

<table class="table table-bordered table-striped">
    <thead class="table-light">
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th width="220">Ações</th>
        </tr>
    </thead>

    <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{ $category->name }}</td>
            <td>{{ $category->description ?? '—' }}</td>

            <td>
                <a href="{{ route('categories.show', $category) }}" class="btn btn-sm btn-secondary">Ver</a>
                <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-warning">Editar</a>

                <form action="{{ route('categories.destroy', $category) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-sm btn-danger" onclick="return confirm('Excluir esta categoria?')">
                        Excluir
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $categories->links() }}
@endsection
