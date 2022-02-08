@extends('layouts.menu')

@section('title', 'LOCAR Locadora de Veículo')

@section('content')


<div id="client-regist-container" class="col-md-6 offset-md-3">
  <span class="heading-page">Cadastro cliente</span> <br> <br>
  <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
      <div class="form-group">
      <label for="title">Nome completo:</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do cliente">
    </div>
    <div class="form-group">
      <label for="title">Email</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Digite o email exemplo@email.com">
    </div>
    <div class="form-group">
      <label for="title">Endereço</label>
      <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o endeço">
    </div>
    <div class="form-group">
      <label for="title">Numero de telefone</label>
      <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Numero de telefone (55) 00 - 00000 0000 ">
    </div>
    <input type="submit" class="btn btn-primary" value="Criar cadastro">
  </form>
</div>

@endsection