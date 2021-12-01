<?php
include('../controller/conexao.php');

$produtoId = $_POST['produto'];
$quantidade = $_POST['quantidade'];

if($produtoId > 0)
{
    $sql_update = "update produto set quantidade = $quantidade where id = $produtoId";
}

$resultado = @mysqli_query($conexao, $sql_update);

if(!$resultado) {
    die('Query invalida: ' . @mysqli_error($conexao));
}
else {
    echo "Alteração realizada!";
}

?>