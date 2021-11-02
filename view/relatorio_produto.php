<?php

// Definindo timezone
date_default_timezone_set('America/Sao_Paulo');

// Importando a biblioteca FPDF
define('FPFF FONTPATH', 'font/');
require('../pdf/fpdf.php');

// Configurando pagina
$data = date('d/m/y h:i');
$pdf = new FPDF('P', 'cm', 'A4');
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', '12');

// Capturando dados que serão usados
$pdo = new PDO('mysql:host=localhost; dbname=vendas', 'root', '');
$sql = $pdo->prepare("select * from produto p inner join fornecedor f on p.fornecedor_id = f.id order by nome");
$sql->execute();

// Imprimindo os dados na pagina
$pdf->cell(19, 1, "Relatorio de Clientes", 1, 1, 'C');
$pdf->cell(19, 1, $data, 1, 2, 'C');

$pdf->cell(4, 1, "DESCRICAO", 1, 0, 'C');
$pdf->cell(5, 1, "GTIN", 1, 0, 'C');
$pdf->cell(3, 1, "PRECO", 1, 0, 'C');
$pdf->cell(7, 1, "FORNECEDOR", 1, 1, 'C');

foreach ($sql as $cliente) {
    $pdf->cell(4, 1, $cliente['descricao'], 1, 0, 'C');
    $pdf->cell(5, 1, $cliente['gtin'], 1, 0, 'C');
    $pdf->cell(3, 1, $cliente['preco'], 1, 0, 'C');
    $pdf->cell(7, 1, $cliente['nome'], 1, 1, 'C');
}
$pdf -> Output();

?>
