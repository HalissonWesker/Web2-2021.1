@extends('layouts.intro')

@section('title', 'Cadastrar veículo')

@section('content')



<div id="client-regist-container" class="col-md-6 offset-md-3">
  
  <form action="{{ route('veiculo.store') }} " method="POST">
    @csrf <br>
    <span class="heading-page2">Cadastrar Veículo</span>
    <div class="sombra scale"></div>
    <div class="menu">
      <br>
         <a href="{{ route('veiculo.index') }}" class="btn btn-sm btn-danger">Cancelar</a><br>
  </div>
    <br>
    <div class="form-group">
      <div class="form-group">
      <label for="quantity">Ano</label>
      <input type="number" class="form-control" id="ano" name="ano" min="2005" max="2023" required>
    </div> 
    
    <div class="form-group">
      <label for="title">Modelo do carro</label>
      <select class="form-control" name="modelo" id="modelo"  placeholder="Selecione o modelo" required>
        
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
      <input type="text" class="form-control" id="placa" name="placa" placeholder="Digite a numeração da placa no formato AAA1A11" required>
    </div>
    <div class="form-group">
      <label for="title">Valor Seguro:</label>
      <input type="number" class="form-control" id="ValorSeguro" name="valor_seguro" placeholder="Digite o valor" required>
    </div>
    <div class="form-group">
      <label for="title">Valor diaria:</label>
      <input type="number" class="form-control" id="ValorDiaria" name="valor_diaria" placeholder="Digite o valor" required>
    </div>   
    <div class="position-relative"  style="width:100%; height:50px ">
      <input type="submit" style="position:absolute;right:0px" class="btn btn-primary end-0" value="Cadastrar veiculo">
    </div>
  </form>
</div>


@endsection