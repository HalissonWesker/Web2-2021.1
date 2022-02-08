<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cadastrar clientes</title>
</head>

<body>
    <form method="post" action="./store">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" />
        
        <label for="endereco">Endereço</label>
        <input type="text" id="endereco" name="endereco" />

        <label for="debito">Débito</label>
        <input type="text" id="debito" name="debito" />

        <input type="submit" value="Cadastrar" />
    </form>
</body>
</html>