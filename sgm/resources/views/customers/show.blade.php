@extends('layouts.app')
@section('title','Cliente')
@section('content')
<h3>Cliente: {{ $customer->name }}</h3>
<p><strong>CPF:</strong> {{ $customer->cpf ?? '—' }}</p>
<p><strong>Telefone:</strong> {{ $customer->phone ?? '—' }}</p>
<p><strong>Email:</strong> {{ $customer->email ?? '—' }}</p>
<p><a href="{{ route('customers.index') }}">Voltar</a></p>
@endsection
