<?php

include("../controller/conexao.php");

$cliente = $_POST["cliente"];
$observacao = $_POST["observacao"];

$sql = @mysqli_query($conexao, "insert into venda_cabecalho 
                                (observacao, data_hora, cliente_id) 
                                values ('$observacao', now(), $cliente)");

if(!$sql) 
    die("Consulta invalida: " . @mysqli_error($conexao));
else 
    header("Location:../view/venda_detalhe.php");

@mysqli_close($conexao);

?>