@extends('layouts.app')
@section('title','Editar Cliente')
@section('content')
<h3>Editar Cliente</h3>
<form method="POST" action="{{ route('customers.update', $customer) }}">@csrf @method('PUT')
  <div><label>Nome: <input name="name" value="{{ old('name', $customer->name) }}" required></label></div>
  <div><label>CPF: <input name="cpf" value="{{ old('cpf', $customer->cpf) }}"></label></div>
  <div><label>Telefone: <input name="phone" value="{{ old('phone', $customer->phone) }}"></label></div>
  <div><label>Email: <input name="email" value="{{ old('email', $customer->email) }}" type="email"></label></div>
  <div style="margin-top:8px;"><button>Salvar</button> <a href="{{ route('customers.index') }}">Cancelar</a></div>
</form>
@endsection
