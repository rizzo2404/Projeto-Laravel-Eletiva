@extends('layouts.app')
@section('title','Fornecedor')
@section('content')
<h3>Fornecedor: {{ $supplier->name }}</h3>
<p><strong>Telefone:</strong> {{ $supplier->phone ?? '—' }}</p>
<p><strong>CNPJ:</strong> {{ $supplier->cnpj ?? '—' }}</p>
<p><a href="{{ route('suppliers.index') }}">Voltar</a></p>
@endsection
