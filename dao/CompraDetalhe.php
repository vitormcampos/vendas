<?php

include("../controller/conexao.php");

//Conteudo do corpo da requisição
$produto_id = $_POST['produto'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];
$compra_id = $_POST['compra'];


//Capturando produto pelo id
$produto_sql = @mysqli_query($conexao, "select * from produto where id = " . $produto_id);
$produto = mysqli_fetch_assoc($produto_sql);

$valor = $produto['preco'];

//Calculo do Subtotal
$total = $quantidade * $valor;

$sql_insert = @mysqli_query(
    $conexao,
    "insert into compra_detalhe
    (
        quantidade,
        valor,
        compra_cabecalho_id,
        produto_id
    )
    values (
        '$quantidade',
        '$total',
        '$compra_id',
        '$produto_id'
)");

if(!$sql_insert)
{
    die("Comando invalido: " . @mysqli_error($conexao));
}
else
{
    header('Location: ../view/compra_detalhe.php');
}
mysqli_close($conexao);
?>