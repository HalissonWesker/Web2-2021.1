@extends('layouts.intro')

@section('title', 'Cadastrar Cliente')

@section('content')

<div id="client-regist-container" class="col-md-6 offset-md-3">
   <br>
  <form action="/StoreCliente" method="POST">
   
    @csrf
    <span class="heading-page2">Cadastro cliente</span>
    <div class="sombra scale"></div>
    <div class="menu">
    <br>
       <a href="/clientes" class="btn btn-sm btn-danger">Cancelar</a><br>
</div>
      <br>

    <!-- Formulário --> 

      <div class="form-group">
      <label for="title">Nome completo:</label>
      <input type="text" pattern="[A-z\s]+$" / \  class="form-control" id="nome" name="nome" placeholder="Nome do cliente" autocomplete="off" required>
      </div>  
    <div class="form-group">
      <label for="title">Endereço</label>
      <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereço" required> 
    </div>
    <div class="form-group">
      <label for="telefone" class="form-label" >Numero de telefone</label>
      <input type="tel" class="form-control" id="telefone" name="telefone"\ pattern="^(\([0-9]{2}\))\s([9]{1})?([0-9]{4})-([0-9]{4})$" \ placeholder="Formato valido (99) 9999-9999" required>
    </div>
     
    <div class="form-group">
      <label for="title">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Digite o email exemplo@email.com" required>
    </div>
    <div class="position-relative"  style="width:100%; height:50px ">
      <input type="submit" style="position:absolute;right:0px" class="btn btn-primary" value="Criar cadastro">
    </div>
  </form>
 

  <!-- Final formulário -->
  <br>
</div>

@endsection


