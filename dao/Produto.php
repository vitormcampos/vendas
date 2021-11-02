<?php

include('../controller/conexao.php');

$id = $_POST['id'];
$descricao = $_POST['descricao'];
$codigo = $_POST['codigo'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];
$fornecedor = $_POST['fornecedor'];

if($id > 0) {
    $sql_insert = "update produto set 
    descricao='$descricao', 
    gtin='$codigo', 
    quantidade='$quantidade', 
    preco='$preco', 
    fornecedor='$fornecedor'
    where id=$id";
}
else {
    $sql_insert = "insert into produto values (
        'default',
        '$descricao',
        '$codigo',
        '$quantidade',
        '$preco',
        '$fornecedor'
    )";
}

$resultado = @mysqli_query($conexao, $sql_insert);

if(!$resultado) {
    die('Query invalida: ' . @mysqli_error($conexao));
}
else {
    echo "Cadastro realizado com sucesso!";
}

?>

<br>

<input type="button" value="Voltar" onclick="window.location = '../view/cadastro_produto.php';">