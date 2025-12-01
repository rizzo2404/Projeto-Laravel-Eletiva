@extends('layouts.app')
@section('title','Fornecedores')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Fornecedores</h1>
    <a href="{{ route('suppliers.create') }}" class="btn btn-primary">Novo fornecedor</a>
</div>

<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Ações</th>
    </tr>
    </thead>

    <tbody>
    @foreach($suppliers as $s)
        <tr>
            <td>{{ $s->name }}</td>
            <td>{{ $s->email }}</td>
            <td>{{ $s->phone }}</td>
            <td>
                <a class="btn btn-sm btn-info" href="{{ route('suppliers.show',$s) }}">Ver</a>
                <a class="btn btn-sm btn-warning" href="{{ route('suppliers.edit',$s) }}">Editar</a>
                <form action="{{ route('suppliers.destroy',$s) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Excluir fornecedor?')">Excluir</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $suppliers->links() }}
@endsection
