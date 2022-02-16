@extends('layouts.intro')

@section('title', 'Realizar Aluguel')

@section('content')

<!-- @section('breadcrumb', 'cliente','disponivel') -->



<div id="client-regist-container" class="col-md-6 offset-md-3">
<form action="/updateAluguel" method="POST">
    @csrf
    <br>
    <span class="heading-page2">Aluguel</span>
    <div class="sombra scale"></div>
    <div class="menu">
      <br>
         <a href="/aluguel" class="btn btn-sm btn-danger">Cancelar</a><br>
  </div><br>
  <input type="text" class="form-control" id="id" name="id" value="{{$all[0]['id']}}" hidden>
      <div class="form-group">
      <label for="title">Selecione cliente</label>
      <select class="form-control" name="idCliente" id="idCliente"  placeholder="Selecione um cliente">
        <option disabled>Selecione um cliente</option>
        @foreach ($clientes ?? '' as $cliente)
        @if($cliente->id = $all[0]['cliente'])
        @echo('<option selected value="{{ $cliente->id }}">{{$cliente->nome}}</option>');
        @else
        @echo( '<option value="{{ $cliente->id }}">{{$cliente->nome}}</option>');
        @endif
          @endforeach
      </select>

      <label for="title">Selecione Veiculo</label>
      <select class="form-control" name="idVeiculo" id="idVeiculo"  placeholder="Selecione um Veiculo">
        <option disabled>Selecione um veiculo</option>
        <<option selected value="{{ $all[0]['veiculo'] }}">{{$all[0]['ano']}} - {{$all[0]['modelo']}} - {{$all[0]['placa']}}</option>
        @foreach ($veiculos as $vei)
          <option value="{{ $vei->id }}">{{$vei->ano}} - {{$vei->modelo}} - {{$vei->placa}}}</option>
          @endforeach
      
      </select>


    </div>
    <div class="form-group">
      <label for="date">Data da locação</label>
          <input type="date" class="form-control" id="date" name="date" value="{{$all[0]['data']}}">
    </div>

    <div class="form-group">
      <label for="title">Combustivel Atual</label>
      <input type="number" class="form-control" id="Combustivel" name="Combustivel" value="{{$all[0]['comb']}}">
    </div>
    <input type="submit" class="btn btn-primary" value="Salvar alterações">
  </form>
</div>

@endsection