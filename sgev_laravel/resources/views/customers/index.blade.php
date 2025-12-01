@extends('layout')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Clientes</h2>
    <a href="{{ route('customers.create') }}" class="btn btn-primary">Novo</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($customers as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->phone }}</td>
            <td>
                <a class="btn btn-sm btn-warning" href="{{ route('customers.edit', $item) }}">Editar</a>
                <form action="{{ route('customers.destroy', $item) }}" method="POST" style="display:inline">
                    @csrf 
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Excluir?')">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $customers->links() }}

@endsection
