<?php

include("../controller/conexao.php");

$fornecedor = $_POST["fornecedor"];
$observacao = $_POST["observacao"];

$sql = @mysqli_query($conexao, "insert into compra_cabecalho 
                                (observacao, data, fornecedor_id, valor) 
                                values ('$observacao', now(), $fornecedor, 0.0)");

if(!$sql) 
    die("Consulta invalida: " . @mysqli_error($conexao));
else 
    header("Location:../view/compra_detalhe.php");

@mysqli_close($conexao);

?>