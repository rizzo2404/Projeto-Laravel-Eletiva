<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>@yield('title','SGEV')</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
<a class="navbar-brand" href="{{ route('products.index') }}">SGEV</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav me-auto">
<li class="nav-item"><a class="nav-link" href="{{ route('products.index') }}">Produtos</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('categories.index') }}">Categorias</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('suppliers.index') }}">Fornecedores</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('customers.index') }}">Clientes</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('orders.index') }}">Pedidos</a></li>
</ul>
</div>
</div>
</nav>


<div class="container mt-4">
@if($errors->any())
<div class="alert alert-danger">
<ul class="mb-0">
@foreach($errors->all() as $e)
<li>{{ $e }}</li>
@endforeach
</ul>
</div>
@endif


@if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif


@yield('content')
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>