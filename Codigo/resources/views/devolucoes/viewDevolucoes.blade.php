@extends('layouts.main')

@section('title', 'Devolução')

@section('content')

<div style ="background-color: #fff, position:relative, text-color: black">



   
<div class = '.bg-light text-black' >



<div class="container ">
      

   <table class="table table-bordered table-striped table-responsive-stack"  id="tableOne">
   <span class="heading-page" style="text-align:center;">Devoluções</span> <br>
   <div class="menu">
           <div class="botoesmenu"> <a href="/" class="btn btn-sm btn-danger">Voltar</a><br><br>
            <a href="{{ route('devolucao.create') }}" class="btn btn-sm btn-primary">Realizar devolução</a><br>
</div>

      <thead class="thead-dark">
   
         <tr>
            <th>Cliente</th>
            <th>Placa</th>
            <th>Modelo</th>
            <th>Valor Total</th>
            <th>Valor Pago</th>
            <th>Forma de pagamento</th>  
            <th>Data da devolução</th>

            <th>Notas</th>

         </tr>
      </thead>
      <tbody>
         @foreach($aluguel as $alu)
         <tr>
            <td>{{$alu['nome']}}</td>
            <td>{{$alu['veiculo']}}</td>
            <td>{{$alu['modelo']}}</td>
            <td>R$:{{$alu['total']}}</td>
            <td>R$:{{$alu['pago']}}</td>
            <td>{{$alu['pag']}}</td>
            <td>{{ date('d/m/Y', strtotime($alu['loca'])) }}</td>

            <td>{{$alu['notas']}}</td>
         </tr>
         @endforeach
        
      </tbody>
   </table>
   
   
   
   
   

</div>

<!-- /.container -->

@endsection