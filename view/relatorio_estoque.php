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
$sql = $pdo->prepare("select * from produto order by descricao");
$sql->execute();

// Imprimindo os dados na pagina
$pdf->cell(19, 1, "Relatorio de Produtos", 1, 1, 'C');
$pdf->cell(19, 1, $data, 1, 2, 'C');

$pdf->cell(6, 1, "GTIN", 1, 0, 'C');
$pdf->cell(7, 1, "DESCRICAO", 1, 0, 'C');
$pdf->cell(6, 1, "QUANTIDADE", 1, 1, 'C');

foreach ($sql as $cliente) {
    $pdf->cell(6, 1, $cliente['gtin'], 1, 0, 'C');
    $pdf->cell(7, 1, $cliente['descricao'], 1, 0, 'C');
    $pdf->cell(6, 1, $cliente['quantidade'], 1, 1, 'C');
}
$pdf -> Output();

?>
