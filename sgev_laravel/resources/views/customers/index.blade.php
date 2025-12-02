@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Clientes</h2>
    <a href="{{ route('customers.create') }}" class="btn btn-primary">Novo Cliente</a>
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
        @foreach($customers as $customer)
        <tr>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->email ?? '—' }}</td>
            <td>{{ $customer->phone ?? '—' }}</td>

            <td>
                <a href="{{ route('customers.show', $customer) }}" class="btn btn-sm btn-secondary">Ver</a>
                <a href="{{ route('customers.edit', $customer) }}" class="btn btn-sm btn-warning">Editar</a>

                <form action="{{ route('customers.destroy', $customer) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">
                        Excluir
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $customers->links() }}
@endsection
