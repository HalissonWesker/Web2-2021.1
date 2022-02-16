@extends('layouts.intro')

@section('title', 'Devolvendo veiculo')

@section('content')

<div id="client-regist-container" class="col-md-6 offset-md-3">
  
  <form action="/StoreDevolucao" method="POST">
    @csrf <br>
    <span class="heading-page2">Pagamento</span>
    <div class="sombra scale"></div>
    <br>
    
    <input type="text" class="form-control" id="id" name="id" value="{{$aluguel[0]['id']}}" hidden>
    <input type="date" class="form-control" id="data_devolucao" name="data_devolucao"value="{{$aluguel[0]['data_devolucao']}}" hidden >
    <input type="text" class="form-control" id="notas" name="notas" value="{{$aluguel[0]['notas']}}"hidden >
    <input type="number" step="0.01" class="form-control" id="valor_adicional" name="valor_adicional" value="{{$aluguel[0]['Valor_adicional']}}" hidden>
    <input type="number" step="0.01" class="form-control" id="valor_total" name="valor_total" value="{{$aluguel[0]['valor']}}" hidden>
  
    <div class="form-group">
        <div class="form-group">
      <label for="title">Valor total:</label>
      <input type="number" step="0.01" class="form-control" id="valor_pago" name="valor_pago" value="{{$aluguel[0]['valor']}}">
    </div>
      <label for="title">Forma de Pagamento:</label>
      <input type="text" class="form-control" id="forma_pagamento" name="forma_pagamento" placeholder="Digite..." required>
    </div>   <div class="form-group">
    
     <input type="submit" class="btn btn-primary" value="Realizar devolução">
  </form>
</div>


@endsection