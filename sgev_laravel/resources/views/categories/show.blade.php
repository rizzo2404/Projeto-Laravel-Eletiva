@extends('layouts.app')
@section('title','Categoria')
@section('content')
<h1>Categoria: {{ $category->name }}</h1>
<p>{{ $category->description }}</p>
<a href="{{ route('categories.index') }}" class="btn btn-secondary">Voltar</a>
@endsection
