<!doctype html>
<html>
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>@yield('title','SGM')</title></head>
<body style="font-family:Arial,Helvetica,sans-serif;margin:20px;">
<header>
  <h2><a href="/">SGM - Sistema de Gestão de Motopeças</a></h2>
  <nav>
    <a href="/products">Produtos</a> | <a href="/suppliers">Fornecedores</a> | <a href="/customers">Clientes</a> | <a href="/orders">Ordens</a>
  </nav>
  <hr/>
</header>
<main>@if(session('success'))<div style="color:green;margin-bottom:10px">{{ session('success') }}</div>@endif @yield('content')</main>
<footer><hr/><small>SGM — Entrega Acadêmica</small></footer>
</body>
</html>
