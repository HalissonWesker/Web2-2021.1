@extends('layouts.main')

@section('title', 'Aluguel')

@section('content')

<div style ="background-color: #fff, position:relative, text-color: black">



   
<div class = '.bg-light text-black' >



<div class="container ">
      

   <table class="table table-bordered table-striped table-responsive-stack"  id="tableOne">
   <span class="heading-page" style="text-align:center;">Aluguéis</span> <br>
      <thead class="thead-dark">
   
         <tr>
            <th>Cliente</th>
            <th>Diaria</th>
            <th>Data da locação</th>
            <th>Combustivel Entregue</th>  
            <th>Veiculo</th>  
            <th>Aluguel Ativo?</th>  
         </tr>
      </thead>
      <tbody>
         <tr>
            <td>Halisson</td>
            <td>RS: 150</td>
            <td>(12/08/2021)</td>
            <td>8 L</td>
            <td>Gol</td>
            <td>Não</td>
            
        
         </tr>
        
      </tbody>
   </table>
   
   
   
   
   

</div>

<!-- /.container -->

@endsection