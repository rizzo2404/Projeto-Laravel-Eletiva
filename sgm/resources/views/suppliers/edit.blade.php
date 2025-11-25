@extends('layouts.app')
@section('title','Editar Fornecedor')
@section('content')
<h3>Editar Fornecedor</h3>
<form method="POST" action="{{ route('suppliers.update', $supplier) }}">@csrf @method('PUT')
  <div><label>Nome: <input name="name" value="{{ old('name', $supplier->name) }}" required></label></div>
  <div><label>Telefone: <input name="phone" value="{{ old('phone', $supplier->phone) }}"></label></div>
  <div><label>CNPJ: <input name="cnpj" value="{{ old('cnpj', $supplier->cnpj) }}"></label></div>
  <div style="margin-top:8px;"><button>Salvar</button> <a href="{{ route('suppliers.index') }}">Cancelar</a></div>
</form>
@endsection
