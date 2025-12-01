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
    <div class="collapse navbar-collapse">
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

    {{-- Sucesso --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Erros de validação --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ocorreram erros:</strong>
            <ul class="mb-0">
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('content')

</div>
<div class="container mt-4">
  @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
  @yield('content')
</div>
</body>
</html>
