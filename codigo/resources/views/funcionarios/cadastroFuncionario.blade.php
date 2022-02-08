@extends('layouts.intro')

@section('title', 'Cadastrar Funcionário')

@section('content')

<div id="client-regist-container" class="col-md-6 offset-md-3">
        <h1 class="p-1 title">Cadastrar Funcionario</h1>
        <div class="menu p-2">
            <a href="/funcionarios" class="btn btn-sm btn-primary">Voltar</a>

        </div>
        <form class='form' action="/SalvarFuncionario" method="POST">
            <div class="mb-3">

                <label for="nome" class="form-label">Nome completo</label>
                <input type="text" pattern="[a-z\s]+$" \ title="sem numero" minlength="10" name="nome" class="form-control" id="nome" autocomplete="off" required>
            </div>
            <div class="mb-3">
                <div class="input"><br>

                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \ title="Digite um CPF no formato: xxx.xxx.xxx-xx"  step="any" name="cpf" max = '11' class="form-control"   id="cpf"  required>
                </div>
            </div>
            <div class="button"><br>

                <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
        </form>
     <?php
    $nome =filter_input(INPUT_POST,'nome');
    $cpf=filter_input(INPUT_POST,'cpf');

if($nome && $cpf ){

      $sql = Database::prepare("SELECT * FROM funcionario  WHERE cpf = :cpf");
        $sql->bindValue(':cpf', $cpf);
        $sql->execute();

if($sql->rowCount() === 0){

$sql= Database::prepare("INSERT INTO funcionario (nome,cpf) VALUES (:nome, :cpf)");
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':cpf', $cpf);
        $sql->execute();

echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                          funcionario cadastrado com Sucesso!
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';

}else{
    echo "Esse cpf , ja esta cadastrado;";
}
}
        ?>
    </div>


@endsection