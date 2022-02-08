@extends('layouts.main')

@section('title', 'Clientes')

@section('content')

<div style ="background-color: #fff, position:relative, text-color: black">



   
<div class = '.bg-light text-black' >



<div class="container ">
   
      

   <table class="table table-bordered table-striped table-responsive-stack"  id="tableOne">
   <span class="heading-page" style="text-align:center;">Clientes</span> <br>
   <div class="menu p-2">
      
   <a href="/" class="btn btn-sm btn-primary">Voltar</a><br><br>
            <a href="/CadastroCliente" class="btn btn-sm btn-primary">Cadastrar funcionario</a><br>
        </div>
      
      <thead class="thead-dark">
   
         <tr>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>Email</th>       
         </tr>
      </thead>
      <tbody>
         <tr>
            <td>Halisson</td>
            <td>Rua 2 de junho</td>
            <td>(77) 9 9999 - 2126</td>
            <td>Halisson@gmail.com</td>
            
        
         </tr>
        
      </tbody>
</div>
   </table>
   
   
   
   
   

</div>

<!-- /.container -->

@endsection