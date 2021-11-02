<?php

include("../controller/conexao.php");

$id = $_POST["id"];
$nome = $_POST['nomeF'];
$razaoSocial = $_POST['nomeRS'];
$cnpj = $_POST['cnpj'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$site = $_POST['site'];

if ($id > 0) {
    $slq_command = "update fornecedor set 
    nome = '$nome',
    razao_social = '$razaoSocial',
    cnpj = '$cnpj',
    endereco = '$endereco',
    bairro = '$bairro',
    complemento = '$complemento',
    cidade = '$cidade',
    estado = '$estado',
    cep = '$cep',
    email = '$email',
    telefone = '$telefone',
    site = '$site'
    where id=$id";
} else {
    $slq_command = "insert into fornecedor values (
        default,
        '$nome',
        '$razaoSocial',
        '$cnpj',
        '$email',
        '$telefone',
        '$site',
        '$endereco',
        '$complemento',
        '$bairro',
        '$cidade',
        '$estado',
        '$cep'
    )";
}



$resultado = @mysqli_query($conexao, $slq_command);

if (!$resultado) {
    die("Query error: " . @mysqli_error($conexao));
} else {
    echo "Cadastro realizado! ";
}
?>

<br>

<input type="button" value="Voltar" onclick="window.location = '../view/cadastro_fornecedor.php';">