@extends('layouts.app')
@section('title','Novo Pedido')
@section('content')
<h1>Novo Pedido</h1>
<form action="{{ route('orders.store') }}" method="POST">@csrf
  <div class="mb-3">
    <label class="form-label">Cliente (opcional)</label>
    <select name="customer_id" class="form-select"><option value=''>-- Nenhum --</option>@foreach($customers as $c)<option value='{{ $c->id }}'>{{ $c->name }}</option>@endforeach</select>
  </div>
  <h4>Itens</h4>
  <div id="items">
    <div class="row g-2 mb-2 item-row">
      <div class="col-6">
        <select name="items[0][product_id]" class="form-select">@foreach($products as $p)<option value="{{ $p->id }}">{{ $p->name }} ({{ $p->stock }})</option>@endforeach</select>
      </div>
      <div class="col-3"><input type="number" name="items[0][quantity]" class="form-control" value="1" min="1"></div>
    </div>
  </div>
  <button type="button" id="addItem" class="btn btn-secondary mb-3">Adicionar item</button>
  <div><button class="btn btn-primary">Salvar Pedido</button></div>
</form>
<script>
let idx = 1;
document.getElementById('addItem').addEventListener('click', function(){
    const container = document.getElementById('items');
    const div = document.createElement('div');
    div.className='row g-2 mb-2 item-row';
    div.innerHTML = `<div class="col-6"><select name="items[\${idx}][product_id]" class="form-select">@foreach($products as $p)<option value="{{ $p->id }}">{{ $p->name }} ({{ $p->stock }})</option>@endforeach</select></div><div class="col-3"><input type="number" name="items[\${idx}][quantity]" class="form-control" value="1" min="1"></div>`;
    container.appendChild(div);
    idx++;
});
</script>
@endsection
