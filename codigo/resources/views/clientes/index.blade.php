<h1>lista de Clientes</h1>

@foreach ($clientes as $cliente)
<ul>
    <li>NOME: {{ $cliente->nome }}</li>
    <li>ENDEREÇO: {{ $cliente->endereco }}</li>
    <li>DÉBITO: {{ $cliente->debito }}</li>
</ul>
@endforeach