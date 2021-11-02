<?php

include("../controller/conexao.php");


$produto_id = $_POST['produto'];
$quantidade = $_POST['quantidade'];
$cliente = $_POST['cliente'];
$venda_id = $_POST['venda'];

$produto_sql = @mysqli_query($conexao, "select * from produto where id = " . $produto_id);
$produto = mysqli_fetch_assoc($produto_sql);

$valor = $produto['preco'];
$total = $quantidade * $valor;

$sql_insert = @mysqli_query(
    $conexao,
    "insert into venda_detalhe
    (
        quantidade,
        valor,
        venda_id,
        produto_id
    )
    values (
        '$quantidade',
        '$total',
        '$venda_id',
        '$produto_id'
)");
?>