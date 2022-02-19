@extends('layouts.main')

@section('title', 'Veiculos')

@section('content')
@if(isset($msg))
<h4>{{$msg}}</h4>
@endif
<div style ="background-color: #fff, position:relative, text-color: black">



   
<div class = '.bg-light text-black' >



<div class="container ">
      

   <table class="table table-bordered table-striped table-responsive-stack"  id="tableOne">
   <span class="heading-page" style="text-align:center;">Veículos</span> <br>
   <div class="menu">
           <div class="botoesmenu"> <a href="/" class="btn btn-sm btn-danger">Voltar</a><br><br>
            <a href="{{ route('veiculo.regis') }}" class="btn btn-sm btn-primary">Cadastrar Veiculo</a><br>
</div>
        </div>
      <thead class="thead-dark">
   
         <tr>
            <th>MODELO</th>
            <th>ANO</th>
            <th>PLACA</th>
            <th>SEGURO</th>
            <th>DIARIA</th>
            <th>STATUS</th>
            <th>AÇÕES</th>

         </tr>
      </thead>
      <tbody>

         @foreach ($veiculo as $veicu)<tr>
            <td>{{ $veicu->modelo }}</td>
            <td>{{ $veicu->ano }}</td>
            <td>{{ $veicu->placa }}</td>
            <td>R$:{{ $veicu->valor_seguro}}</td>
            <td>R$:{{ $veicu->valor_diaria}}</td>
            <td>{{$veicu->status}}</td>

            <td>
                                <a class="btn btn-warning" href="{{route('veiculo.create',['id' => $veicu->id])}}" role="button">Editar</a>
                                <a class="btn btn-danger" onclick="return confirm('Quer mesmo deletar? A ação não poderá ser desfeita');" href="{{route('veiculo.destroy',['id' => $veicu->id])}}" role="button">Apagar</a>
            </td>
        
         </tr>
        @endforeach
      </tbody>
   </table>
   
   
   
   
   

</div>

<!-- /.container -->

@endsection