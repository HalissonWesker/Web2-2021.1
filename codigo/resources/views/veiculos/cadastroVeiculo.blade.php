@extends('layouts.intro')

@section('title', 'Cadastrar veículo')

@section('content')

<div id="client-regist-container" class="col-md-6 offset-md-3">
  
  <form action="/StoreVeiculo" method="POST">
    @csrf <br>
    <span class="heading-page2">Cadastrar Veículo</span>
    <div class="sombra scale"></div>
    <br>
    <div class="form-group">
      <div class="form-group">
      <label for="quantity">Ano</label>
      <input type="number" class="form-control" id="ano" name="ano" min="2005" max="2023">
    </div> 
    
    <div class="form-group">
      <label for="title">Modelo do carro</label>
      <select class="form-control" name="modelo" id="modelo"  placeholder="Selecione o modelo">
        
        <option value="">Selecione um modelo</option>
        <option value="Argo">Argo</option>
        <option value="HB20"> HB20</option>
        <option value="Mobi">Mobi</option>
        <option value="Onix">Onix</option>
        <option value="Gol">Gol</option>
        <option value="Kwid">Kwid</option>
        <option value="Strada">Strada</option>
        <option value="Territory">Territory</option>
      </select>
    </div>
    <div class="form-group">
        <div class="form-group">
      <label for="title">Placa:</label>
      <input type="text" class="form-control" id="placa" name="placa" placeholder="Digite a numeração da placa">
    </div>
    <div class="form-group">
      <label for="title">Valor Seguro:</label>
      <input type="number" class="form-control" id="ValorSeguro" name="ValorSeguro" placeholder="Digite o valor">
    </div>
    <div class="form-group">
      <label for="title">Valor diaria:</label>
      <input type="number" class="form-control" id="ValorDiaria" name="ValorDiaria" placeholder="Digite o valor">
    </div>   
     <input type="submit" class="btn btn-primary" value="Cadastrar veiculo">
  </form>
</div>


@endsection