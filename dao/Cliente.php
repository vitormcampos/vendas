<?php

include("../controller/conexao.php");

$id = $_POST["id"];
$nome = $_POST["nome"];
$ultimoNome = $_POST["ultimoNome"];
$nascimento = $_POST["nascimento"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$email = $_POST["email"];
$endereco = $_POST["endereco"];
$complemento = $_POST["complemento"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$cep = $_POST["cep"];

if($id > 0) {
    $sql_command = "update cliente set
    nome='$nome',
    sobrenome='$ultimoNome',
    data_nascimento='$nascimento',
    cpf='$cpf',
    rg='$rg',
    email='$email',
    endereco='$endereco',
    complemento='$complemento',
    bairro='$bairro',
    cidade='$cidade',
    estado='$estado',
    cep='$cep'
    where id=$id";
}
else {
    $sql_command = "insert into cliente values (0, 
    '$nome', 
    '$ultimoNome', 
    '$nascimento',
    '$cpf',
    '$rg',
    '$email',
    '$endereco',
    '$complemento',
    '$bairro',
    '$cidade',
    '$estado',
    '$cep'
    )";
}



$resultado = @mysqli_query($conexao, $sql_command);

if (!$resultado) {
    die('Query invalida: ' . @mysqli_error($conexao));
} else {
    echo "Cadastro realizado com sucesso!";
}

?>

<br>

<input type="button" value="Voltar" onclick="window.location = '../view/cadastro_cliente.php';">