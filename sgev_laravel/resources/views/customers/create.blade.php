@extends('layouts.app')
@section('title','Novo Cliente')
@section('content')
<h1>Novo Cliente</h1>
<form action="{{ route('customers.store') }}" method="POST">@csrf
  <div class="mb-3"><label class="form-label">Nome</label><input name="name" class="form-control" required></div>
  <div class="mb-3"><label class="form-label">Email</label><input name="email" class="form-control"></div>
  <div class="mb-3"><label class="form-label">Telefone</label><input name="phone" class="form-control"></div>
  <button class="btn btn-primary">Salvar</button>
</form>
@endsection
