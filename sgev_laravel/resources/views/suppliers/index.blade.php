@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Fornecedores</h2>
    <a href="{{ route('suppliers.create') }}" class="btn btn-primary">Novo Fornecedor</a>
</div>

<table class="table table-bordered table-striped">
    <thead class="table-light">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th width="220">Ações</th>
        </tr>
    </thead>

    <tbody>
        @foreach($suppliers as $supplier)
        <tr>
            <td>{{ $supplier->name }}</td>
            <td>{{ $supplier->email ?? '—' }}</td>
            <td>{{ $supplier->phone ?? '—' }}</td>

            <td>
                <a href="{{ route('suppliers.show', $supplier) }}" class="btn btn-sm btn-secondary">Ver</a>
                <a href="{{ route('suppliers.edit', $supplier) }}" class="btn btn-sm btn-warning">Editar</a>

                <form action="{{ route('suppliers.destroy', $supplier) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-sm btn-danger" onclick="return confirm('Deseja excluir este fornecedor?')">
                        Excluir
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $suppliers->links() }}
@endsection
