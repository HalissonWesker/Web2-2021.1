@extends('layouts.main')

@section('title', 'Aluguel')

@section('content')

<div style ="background-color: #fff, position:relative, text-color: black">



   
<div class = '.bg-light text-black' >



<div class="container ">
      

   <table class="table table-bordered table-striped table-responsive-stack"  id="tableOne">
   <span class="heading-page" style="text-align:center;">Aluguéis Ativos</span> <br>
   <div class="menu">
           <div class="botoesmenu"> <a href="/" class="btn btn-sm btn-danger">Voltar</a><br><br>
            <a href="{{route('aluguel.create')}}" class="btn btn-sm btn-primary">Realizar Aluguel</a><br>
</div>

      <thead class="thead-dark">
        
         <tr>
            <th>Cliente</th>
            <th>Diaria</th>
            <th>Data da locação</th>
            <th>Combustivel Entregue</th>  
            <th>Placa</th>  
            <th>Modelo</th>
            <th>AÇÕES</th>  
         </tr>
      </thead>
      <tbody>
         <tr>
            @foreach($aluguel as $alu)
            <td>{{$alu['nome']}}</td>
            <td>R$:{{$alu['diaria']}}</td>
            <td>{{ date('d/m/Y', strtotime($alu['loca'])) }}</td>
            <td>{{$alu['combu']}} Litro(s)</td>
            <td>{{$alu['veiculo']}}</td>
            <td>{{$alu['modelo']}}</td>      
            <td>
                           
                           <a class="btn btn-warning" href="{{route('aluguel.edit',['id' => $alu['id']])}}" role="button">Editar</a>
                           <a class="btn btn-danger" onclick="return confirm('Quer mesmo deletar? A ação não poderá ser desfeita');" href="{{route('aluguel.edit', ['id' => $alu['id']])}}" role="button">Apagar</a>
            </td>
         </tr>
         @endforeach

        
      </tbody>
   </table>
   
   
   
   
   

</div>

<!-- /.container -->

@endsection