@extends('layouts.main')

@section('title', 'Veiculos')

@section('content')

<div style ="background-color: #fff, position:relative, text-color: black">



   
<div class = '.bg-light text-black' >



<div class="container ">
      

   <table class="table table-bordered table-striped table-responsive-stack"  id="tableOne">
   <span class="heading-page" style="text-align:center;">Veículos</span> <br>
   <div class="menu p-2">
            <a href="/" class="btn btn-sm btn-primary">Voltar</a><br><br>
            <a href="/CadastroVeiculo" class="btn btn-sm btn-primary">Cadastrar Veiculo</a><br>
        </div>
      <thead class="thead-dark">
   
         <tr>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Placa</th>
            <th>Seguro</th>
            <th>Diaria</th>
         </tr>
      </thead>
      <tbody>

         @foreach ($veiculo as $veicu)<tr>
            <td>{{ $veicu->modelo }}</td>
            <td>{{ $veicu->ano }}</td>
            <td>{{ $veicu->placa }}</td>
            <td>RS: {{ $veicu->valorSeguro }}</td>
            <td>RS: {{ $veicu->ValorDiaria}}</td>
        
         </tr>
        @endforeach
      </tbody>
   </table>
   
   
   
   
   

</div>

<!-- /.container -->

@endsection