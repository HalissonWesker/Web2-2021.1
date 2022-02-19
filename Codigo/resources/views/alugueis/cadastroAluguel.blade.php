@extends('layouts.intro')

@section('title', 'Realizar Aluguel')

@section('content')

<div id="client-regist-container" class="col-md-6 offset-md-3">
<form action="{{ route('aluguel.store') }}" method="POST">
    @csrf
    <br>
    <span class="heading-page2">Aluguel</span>
    <div class="sombra scale"></div>
    <div class="menu">
      <br>
         <a href="/aluguel" class="btn btn-sm btn-danger">Cancelar</a><br>
  </div><br>
    
      <div class="form-group">
      <label for="title">Selecione cliente</label>
      <select class="form-control" name="idCliente" id="idCliente"  placeholder="Selecione um cliente">
        <option disabled>Selecione um cliente</option>
        @foreach ($clientes ?? '' as $cliente)
            <option value="{{ $cliente->id }}">{{$cliente->nome}}</option>
          @endforeach
      </select>

      <label for="title">Selecione Veiculo</label>
      <select class="form-control" name="idVeiculo" id="idVeiculo"  placeholder="Selecione um Veiculo">
        <option disabled>Selecione um veiculo</option>
        @foreach ($veiculos as $veiculo)
          <option value="{{ $veiculo->id }}">{{$veiculo->ano}} - {{$veiculo->modelo}} - {{$veiculo->placa}}</option>
          @endforeach
      
      </select>


    </div>
    <div class="form-group">
      <label for="date">Data da locação</label>
      <input type="date" class="form-control" id="date" name="date">
    </div>

    <div class="form-group">
      <label for="title">Combustivel Atual</label>
      <input type="number" class="form-control" id="Combustivel" name="Combustivel">
    </div>
    <div class="position-relative"  style="width:100%; height:50px; margin-top:20px">
      <input type="submit" style="position:absolute;right:0px" class="btn btn-primary" value="Criar cadastro">
    </div>
  </form>
</div>

@endsection