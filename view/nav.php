<?php


function get_navbar()
{


    $servidor = "localhost";
    $nome_sistema = "vendas";


    //URLs de cadastro
    $url_cadastro_cliente = "//" . $servidor . "/" . $nome_sistema . "/view/cadastro_cliente.php";
    $url_cadastro_fornercedor = "//" . $servidor . "/" . $nome_sistema . "/view/cadastro_fornecedor.php";
    $url_cadastro_produto = "//" . $servidor . "/" . $nome_sistema . "/view/cadastro_produto.php";

    //URLs de consulta
    $url_consulta_cliente = "//" . $servidor . "/" . $nome_sistema . "/view/consulta_cliente.php";
    $url_consulta_fornecedor = "//" . $servidor . "/" . $nome_sistema . "/view/consulta_fornecedor.php";
    $url_consulta_produto = "//" . $servidor . "/" . $nome_sistema . "/view/consulta_produto.php";

    //URLs de Movimentações
    $url_venda = "//" . $servidor . "/" . $nome_sistema . "/view/venda_cabecalho.php";
    $url_estoque_acerto = "//" . $servidor . "/" . $nome_sistema . "/view/acerto_estoque.php";
    $url_estoque_entrada = "//" . $servidor . "/" . $nome_sistema . "/view/compra_cabecalho.php";

    //URLs de Relatorios
    $url_relatorio_cliente = "//" . $servidor . "/" . $nome_sistema . "/view/relatorio_cliente.php";
    $url_relatorio_fornecedor = "//" . $servidor . "/" . $nome_sistema . "/view/relatorio_fornecedor.php";
    $url_relatorio_produto = "//" . $servidor . "/" . $nome_sistema . "/view/relatorio_produto.php";
    $url_relatorio_venda = "//" . $servidor . "/" . $nome_sistema . "/view/relatorio_venda.php";
    $url_relatorio_estoque = "//" . $servidor . "/" . $nome_sistema . "/view/relatorio_estoque.php";

    $navbar =
        "<nav class='nav bg-dark py-2 rounded styck'>
        <li class=nav-item>
            <a class='nav-link text-white' href='//localhost/vendas/index.php'>Inicio</a>
        </li>
            <li class='nav-item dropdown'>
                <a class='nav-link dropdown-toggle text-white' data-toggle='dropdown' href='#'>Cadastro</a>
                <div class='dropdown-menu'>
                    <a class='nav-link active text-center text-dark' href=" . $url_cadastro_cliente . ">Cliente</a>
                    <a class='nav-link active text-center text-dark' href='" . $url_cadastro_fornercedor . "'>Fornecedor</a>
                    <a class='nav-link active text-center text-dark' href='" . $url_cadastro_produto . "'>Produto</a>
                </div>
            </li>
        <li class='nav-item dropdown'>
            <a class='nav-link dropdown-toggle text-white' data-toggle='dropdown' href='#'>Consulta</a>
                <div class='dropdown-menu'>
                    <a class='nav-link active text-center text-dark' href='" . $url_consulta_cliente . "'>Cliente</a>
                    <a class='nav-link active text-center text-dark' href='" . $url_consulta_fornecedor . "'>Fornecedor</a>
                    <a class='nav-link active text-center text-dark' href='" . $url_consulta_produto . "'>Produto</a>
                </div>
        </li>
        <li class='nav-item dropdown'>
            <a class='nav-link dropdown-toggle text-white' data-toggle='dropdown' href='#'>Movimentações</a>
            <div class='dropdown-menu'>
                <a class='nav-link active text-center text-dark' href='" . $url_venda . "'>Iniciar Venda</a>
                <a class='nav-link active text-center text-dark' href='" . $url_estoque_entrada . "'>Entrada</a>
                <a class='nav-link active text-center text-dark' href='" . $url_estoque_acerto . "'>Acerto de estoque</a>
            </div>
        </li>
        <li class='nav-item dropdown'>
            <a class='nav-link dropdown-toggle text-white' data-toggle='dropdown' href='#'>Relatorios</a>
            <div class='dropdown-menu'>
                <a class='nav-link active text-center text-dark' target='blank' href='" . $url_relatorio_venda . "'>Venda</a>
                <a class='nav-link active text-center text-dark' target='blank' href='" . $url_relatorio_produto . "'>Produto</a>
                <a class='nav-link active text-center text-dark' target='blank' href='" . $url_relatorio_cliente . "'>Cliente</a>
                <a class='nav-link active text-center text-dark' target='blank' href='" . $url_relatorio_fornecedor . "'>Fornecedor</a>
                <a class='nav-link active text-center text-dark' target='blank' href='" . $url_relatorio_estoque . "'>Estoque</a>
            </div>
        </li>
    </nav> 
    ";
    return $navbar;
}
