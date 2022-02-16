@extends('layouts.intro')

@section('title', 'Cadastrar veículo')

@section('content')

<div id="client-regist-container" class="col-md-6 offset-md-3">
  
  <form action="/updateVeiculo" method="POST">
    @csrf <br>
    <span class="heading-page2">Cadastrar Veículo</span>
    <div class="sombra scale"></div>
    <div class="menu">
      <br>
         <a href="/veiculos" class="btn btn-sm btn-danger">Cancelar</a><br>
  </div>
    <br>
    <div class="form-group">
      <div class="form-group">
      <label for="quantity">Ano</label>
      <input type="number" class="form-control" id="ano" name="ano" min="2005" max="2023" value="{{$veiculo->ano}}">
    </div> 
    
    <div class="form-group">
      <label for="title">Modelo do carro</label>
      <select class="form-control" name="modelo" id="modelo" >
        <option disabled hidden>Selecione um modelo</option>
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
      <input type="text" class="form-control" id="placa" name="placa" value="{{$veiculo->placa}}">
      <input type="text" class="form-control" id="id" name="id" value="{{$veiculo->id}}" hidden>
    </div>
    <div class="form-group">
      <label for="title">Valor Seguro:</label>
      <input type="number" class="form-control" id="ValorSeguro" name="valor_seguro" value="{{$veiculo->valor_seguro}}">
    </div>
    <div class="form-group">
      <label for="title">Valor diaria:</label>
      <input type="number" class="form-control" id="ValorDiaria" name="valor_diaria" value="{{$veiculo->valor_diaria}}">
    </div>   
     <input type="submit" class="btn btn-primary" value="Salvar alterações">
  </form>
</div>


@endsection