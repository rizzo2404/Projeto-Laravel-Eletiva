<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sistema de Gestão de Motopeças (SGM)</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ url('/') }}">SGM</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('products.index') }}">Produtos</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('suppliers.index') }}">Fornecedores</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('customers.index') }}">Clientes</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('orders.index') }}">Pedidos</a>
            </li>

        </ul>
    </div>
  </div>
</nav>

<div class="container mt-4">

    {{-- Área para mensagens de sucesso e erro --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Erro:</strong>
            <ul class="mb-0">
                @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('content')

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
