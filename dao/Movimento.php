<?php
include('../controller/conexao.php');

$datahora_inicio = new DateTime('NOW');
$datahora_fim = new DateTime('NOW');
$comandoSql = "insert into movimento values(default, '$datahora_inicio', '$datahora_fim' 0)";

$resultado = @mysqli_query($conexao, $comandoSql);
?>