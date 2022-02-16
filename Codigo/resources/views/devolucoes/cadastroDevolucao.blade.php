@extends('layouts.intro')

@section('title', 'Devolvendo veiculo')

@section('content')

<div id="client-regist-container" class="col-md-6 offset-md-3">
  
  <form action="/CalcDevolucao" method="POST">
    @csrf <br>
    <span class="heading-page2">Devolução</span>
    <div class="sombra scale"></div>
    <div class="menu">
      <br>
         <a href="/Devolucao" class="btn btn-sm btn-danger">Cancelar</a><br>
  </div>
        <br>
    
    
    <div class="form-group">
      <label for="title">Selecione o aluguel</label>
      <select class="form-control" name="id" id="id"  placeholder="Selecione o aluguel">
        
        <option value="">Selecione um aluguel</option>
        @foreach($aluguel as $alu)
        <option value="{{$alu['id']}}">Cliente: {{$alu['nome']}} | Veiculo: {{$alu['veiculo']}} | Modelo: {{$alu['modelo']}}</option>
        @endforeach


      </select>
      
    </div>
    <div class="form-group">
      <label for="date">Data da devolução:</label>
      <input type="date" class="form-control" id="data_devolucao" name="data_devolucao">
    </div>
    <div class="form-group">
        <div class="form-group">
      <label for="title">Valor Extra:</label>
      <input type="number" class="form-control" id="Valor_adicional" name="Valor_adicional" placeholder="Digite o valor">
    </div>
    <div class="form-group">
      <label for="title">Combustivel devolução:</label>
      <input type="number" class="form-control" id="combustiveldevolucao" name="combustiveldevolucao" placeholder="Digite a quantidade em litros" required>
    </div>
    <div class="form-group">
      <label for="title">Valor combustivel:</label>
      <input type="number" step="0.01" class="form-control" id="Valorcombustivel" name="Valorcombustivel" placeholder="Digite o valor" required>
    </div>   
     <div class="form-group">
      <label for="title">Notas:</label>
      <input type="text" class="form-control" id="notas" name="notas" placeholder="Descreva alguma observação">
      <div class="position-relative"  style="width:100%; height:50px; margin-top:20px; ">
      <input type="submit" style="position:absolute;right:0px" class="btn btn-primary" value="Devolver">
    </div>
  </form>
</div>


@endsection