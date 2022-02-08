@extends('layouts.intro')

@section('title', 'Cadastrar Cliente')

@section('content')

<div id="client-regist-container" class="col-md-6 offset-md-3">
   <br>
  <form action="/StoreCliente" method="POST">
   
    @csrf
    <span class="heading-page2">Cadastro cliente</span>
    <div class="sombra scale"></div>
      <br>
    <!-- Formulário --> 

      <div class="form-group">
      <label for="title">Nome completo:</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do cliente">
      </div>  
    <div class="form-group">
      <label for="title">Endereço</label>
      <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereço">
    </div>
    <div class="form-group">
      <label for="telefone" class="form-label" >Numero de telefone</label>
      <input type="tel" class="form-control" id="telefone" name="telefone"\ pattern="^(\([0-9]{2}\))\s([9]{1})?([0-9]{4})-([0-9]{4})$" \ placeholder="Formato valido (99) 99999-9999">
    </div>
     
    <div class="form-group">
      <label for="title">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Digite o email exemplo@email.com">
    </div>
    <input type="submit" class="btn btn-primary" value="Criar cadastro">

  </form>
  <button class="btn btn-primary" > Voltar<a href="/"></a> </button>

  <!-- Final formulário -->
  <br>
</div>

@endsection


