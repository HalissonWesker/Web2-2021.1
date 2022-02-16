@extends('layouts.intro')

@section('title', 'Cadastrar Cliente')

@section('content')

<div id="client-regist-container" class="col-md-6 offset-md-3">
   <br>
  <form action="/updateCliente" method="POST">
   
    @csrf
    <span class="heading-page2">Cadastro cliente</span>
    <div class="sombra scale"></div>
    <div class="menu">
    <br>
       <a href="/clientes" class="btn btn-sm btn-danger">Cancelar</a><br>
</div>
      <br>

    <!-- Formulário --> 
    <input type="text" id="id" name="id" value="{{$clientes->id}}" hidden>
      <div class="form-group">
      <label for="title">Nome completo:</label>
      <input type="text" class="form-control" id="nome" name="nome" value="{{$clientes->nome}}">
      </div>  
    <div class="form-group">
      <label for="title">Endereço</label>
      <input type="text" class="form-control" id="endereco" name="endereco" value="{{$clientes->endereco}}">
    </div>
    <div class="form-group">
      <label for="telefone" class="form-label" >Numero de telefone</label>
      <input type="tel" class="form-control" id="telefone" name="telefone"\ pattern="^(\([0-9]{2}\))\s([9]{1})?([0-9]{4})-([0-9]{4})$" \ value="{{$clientes->telefone}}">
    </div>
     
    <div class="form-group">
      <label for="title">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="{{$clientes->email}}">
    </div>
    <input type="submit" class="btn btn-primary" value="Salvar alterações">

  </form>
 

  <!-- Final formulário -->
  <br>
</div>

@endsection


