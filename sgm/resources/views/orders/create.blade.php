@extends('layouts.app') @section('content')
<h3>Nova Ordem de Serviço</h3>
<form method="POST" action="{{ route('orders.store') }}">@csrf
  <div><label>Cliente: <select name="customer_id"><option value="">--</option>@foreach($customers as $c)<option value="{{ $c->id }}">{{ $c->name }}</option>@endforeach</select></label></div>
  <h4>Itens</h4>
  <div id="items">
    <div class="item-row">
      <select name="items[0][product_id]">@foreach($products as $p)<option value="{{ $p->id }}">{{ $p->name }} ({{ $p->quantity }})</option>@endforeach</select>
      <input type="number" name="items[0][quantity]" value="1" min="1">
    </div>
  </div>
  <button type="button" id="add">Adicionar item</button>
  <div><button>Salvar Ordem</button> <a href="{{ route('orders.index') }}">Cancelar</a></div>
</form>
<script>
let idx=1; document.getElementById('add').addEventListener('click',()=>{ const c=document.getElementById('items'); const d=document.createElement('div'); d.className='item-row'; d.innerHTML=`<select name="items[\${idx}][product_id]">@foreach($products as $p)<option value="{{ $p->id }}">{{ $p->name }} ({{ $p->quantity }})</option>@endforeach</select> <input type="number" name="items[\${idx}][quantity]" value="1" min="1">`; c.appendChild(d); idx++; });
</script>
@endsection
