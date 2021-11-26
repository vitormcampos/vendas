<?php

function get_navbar() {
    $navbar = "<nav class='nav bg-dark py-2 rounded styck'>
    <li class=nav-item>
    <a class='nav-link text-white' href='//localhost/vendas/index.php'>Inicio</a>
    </li>
    <li class='nav-item dropdown'>
    <a class='nav-link dropdown-toggle text-white' data-toggle='dropdown' href='#'>Cadastro</a>
    <div class='dropdown-menu'>
    <a class='nav-link active text-center text-dark' href='//localhost/vendas/view/cadastro_cliente.php'>Cliente</a>
    <a class='nav-link active text-center text-dark' href='//localhost/vendas/view/cadastro_fornecedor.php'>Fornecedor</a>
    <a class='nav-link active text-center text-dark' href='//localhost/vendas/view/cadastro_produto.php'>Produto</a>
    </div>
    </li>
    <li class='nav-item dropdown'>
    <a class='nav-link dropdown-toggle text-white' data-toggle='dropdown' href='#'>Consulta</a>
    <div class='dropdown-menu'>
    <a class='nav-link active text-center text-dark' href='//localhost/vendas/view/consulta_cliente.php'>Cliente</a>
    <a class='nav-link active text-center text-dark' href='//localhost/vendas/view/consulta_fornecedor.php'>Fornecedor</a>
    <a class='nav-link active text-center text-dark' href='//localhost/vendas/view/consulta_produto.php'>Produto</a>
    </div>
    </li>
    <li class='nav-item dropdown'>
    <a class='nav-link dropdown-toggle text-white' data-toggle='dropdown' href='#'>Movimentações</a>
    <div class='dropdown-menu'>
    <a class='nav-link active text-center text-dark' href='//localhost/vendas/view/venda_cabecalho.php'>Iniciar Venda</a>
    <a class='nav-link active text-center text-dark' href=''>Entrada</a>
    <a class='nav-link active text-center text-dark' href=''>Saida</a>
    </div>
    </li>
    <li class='nav-item dropdown'>
    <a class='nav-link dropdown-toggle text-white' data-toggle='dropdown' href='#'>Relatorios</a>
    <div class='dropdown-menu'>
    <a class='nav-link active text-center text-dark' target='blank' href='//localhost/vendas/view/relatorio_venda.php'>Venda</a>
    <a class='nav-link active text-center text-dark' target='blank' href='//localhost/vendas/view/relatorio_produto.php'>Produto</a>
    <a class='nav-link active text-center text-dark' target='blank' href='//localhost/vendas/view/relatorio_cliente.php'>Cliente</a>
    <a class='nav-link active text-center text-dark' target='blank' href='//localhost/vendas/view/relatorio_fornecedor.php'>Fornecedor</a>
    </div>
    </li>
    </nav> 
    ";
    return $navbar;
}

?>