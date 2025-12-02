@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Produtos</h2>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Novo Produto</a>
</div>

<table class="table table-bordered table-striped">
    <thead class="table-light">
        <tr>
            <th>Nome</th>
            <th>SKU</th>
            <th>Preço</th>
            <th>Estoque</th>
            <th>Categoria</th>
            <th>Fornecedor</th>
            <th width="220">Ações</th>
        </tr>
    </thead>

    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->sku }}</td>
            <td>R$ {{ number_format($product->price, 2, ',', '.') }}</td>
            <td>{{ $product->stock }}</td>
            <td>{{ $product->category->name ?? '—' }}</td>
            <td>{{ $product->supplier->name ?? '—' }}</td>

            <td>
                <a href="{{ route('products.show', $product) }}" class="btn btn-sm btn-secondary">Ver</a>
                <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-warning">Editar</a>

                <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-sm btn-danger" onclick="return confirm('Excluir este produto?')">
                        Excluir
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $products->links() }}
@endsection
