@extends('layouts.main')

@section('title', 'Funcionários')

@section('content')

<div style ="background-color: #fff, position:relative, text-color: black">



   
<div class = '.bg-light text-black' >



<div class="container ">
      

   <table class="table table-bordered table-striped table-responsive-stack"  id="tableOne">
   <span class="heading-page" style="text-align:center;">Funcionários</span> <br>
   <div class="menu p-2">

   
            <a href="/" class="btn btn-sm btn-primary">Voltar</a><br><br>
            <a href="/CadastroFuncionario" class="btn btn-sm btn-primary">Cadastrar funcionario</a><br>
        </div>
      <thead class="thead-dark">
   
         <tr>
            <th>Nome</th>
            <th>CPF</th>
         </tr>
      </thead>
      <tbody>
         
         @foreach ($funcionarios as $func)
            <tr>
            <td>{{ $func -> nome }}</td>
            <td>{{ $func -> cpf }}</td>
          </tr>
          @endforeach
      </tbody>
   </table>  
   
   

</div>

<!-- /.container -->

@endsection