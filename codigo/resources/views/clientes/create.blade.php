@extends('layouts.main')

@section('titulo', 'CADASTRO DE CLIENTES')

@section('conteudo')

  <div id="form">
    <h2> ADICIONAR NOVO CLIENTE: </h2>
    <br>
    <form method="post" action="{{route('clientes.store')}}">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" />
        
        <label for="endereco">Endereço</label>
        <input type="text" id="endereco" name="endereco" />

        <label for="debito">Débito</label>
        <input type="text" id="debito" name="debito" />

        <input type="submit" value="Cadastrar" />
    </form>
</div>

@endsection('conteudo')