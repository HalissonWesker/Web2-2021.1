@extends('layouts.main')

@section('title', 'Clientes')

@section('content')

<div style ="background-color: #fff, position:relative, text-color: black">



   
<div class = '.bg-light text-black' >



<div class="container ">
   
      

   <table class="table table-bordered table-striped table-responsive-stack"  id="tableOne">
   <span class="heading-page" style="text-align:center;">Clientes</span> <br>
   <div class="menu">
           <div class="botoesmenu"> <a href="/" class="btn btn-sm btn-danger">Voltar</a><br><br>
            <a href="{{route('cliente.regist')}}" class="btn btn-sm btn-primary">Cadastrar Cliente</a><br>
   </div>
      
      <thead class="thead-dark">
   
         <tr>
            <th>NOME</th>
            <th>ENDERECO</th>
            <th>TELEFONE</th>
            <th>EMAIL</th>
            <th>AÇÕES</th>
         </tr>
      </thead>
      <tbody>
      
      @if ($clientes)

      @foreach($clientes as $cli)
         <tr>
            <td>{{ $cli->nome }}</td>
            <td>{{ $cli->endereco }}</td>
            <td>{{ $cli->telefone }}</td>
            <td>{{ $cli->email }}</td>
            <td> 
               <a class="btn btn-warning" href="{{route('cliente.edit',['id' => $cli->id] )}}" role="button">Editar</a>
               <a class="btn btn-danger" onclick="return confirm('Quer mesmo deletar? A ação não poderá ser desfeita');" href="{{route('cliente.destroy', $cli->id)}}" role="button">Apagar</
            </td>
        
         </tr>
        @endforeach
      @endif
      </tbody>
</div>
   </table>
   
   
   
   
   

</div>

<!-- /.container -->

@endsection