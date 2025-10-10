@extends('layouts.app')
@section('title','Novo Cliente')
@section('content')
<h3>Novo Cliente</h3>
<form method="POST" action="{{ route('customers.store') }}">@csrf
  <div><label>Nome: <input name="name" required></label></div>
  <div><label>CPF: <input name="cpf"></label></div>
  <div><label>Telefone: <input name="phone"></label></div>
  <div><label>Email: <input name="email" type="email"></label></div>
  <div style="margin-top:8px;"><button>Salvar</button> <a href="{{ route('customers.index') }}">Cancelar</a></div>
</form>
@endsection
