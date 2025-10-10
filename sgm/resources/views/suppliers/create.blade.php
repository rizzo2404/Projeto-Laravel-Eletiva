@extends('layouts.app')
@section('title','Novo Fornecedor')
@section('content')
<h3>Novo Fornecedor</h3>
<form method="POST" action="{{ route('suppliers.store') }}">@csrf
  <div><label>Nome: <input name="name" required></label></div>
  <div><label>Telefone: <input name="phone"></label></div>
  <div><label>CNPJ: <input name="cnpj"></label></div>
  <div style="margin-top:8px;"><button>Salvar</button> <a href="{{ route('suppliers.index') }}">Cancelar</a></div>
</form>
@endsection
