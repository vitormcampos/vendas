<?php
include("nav.php");
include("../controller/conexao.php");

// Consulta a ultima compra 
$compra_sql = @mysqli_query($conexao, "select * from compra_cabecalho order by id desc limit 1") or die($mysqli->error);
$compra = mysqli_fetch_assoc($compra_sql);

// Consulta fornecedor da compra
$fornecedor_sql = @mysqli_query($conexao, "select * from fornecedor where id = " . $compra['fornecedor_id']) or die($mysqli->error);
$fornecedor = mysqli_fetch_assoc($fornecedor_sql);

// Consulta produtos comprados
$produtos_sql = @mysqli_query($conexao, "select gtin, p.descricao, cd.valor, cd.quantidade
                                        from compra_detalhe cd
                                        inner join produto p
                                        on cd.produto_id = p.id 
                                        inner join compra_cabecalho cc
                                        on cd.compra_cabecalho_id =" . $compra['id']) 
                                        or die($mysqli->error);
$produto_compra = mysqli_fetch_assoc($produtos_sql);
echo $produto_compra;

// Total da compra
$total_sql = @mysqli_query($conexao, "select sum(valor) as total from compra_detalhe where compra_id = " . $compra['id']);
$total_compra = mysqli_fetch_assoc($total_sql);

function listaProdutos($conexao)
{
    $sql = @mysqli_query($conexao, "select * from produto order by descricao");
    $produtos = [];
    while ($produto = mysqli_fetch_assoc($sql)) {
        array_push($produtos, $produto);
    }
    return $produtos;
}

$produtos = listaProdutos($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>compra</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <?php echo get_navbar(); ?>

    <div class="container-fluid my-5 p-5 rounded" style="width: 70vw; background-color: cornflowerblue;">
        <h3 class="text-center p-3 text-white">Compra</h3>
        <form action="../dao/CompraDetalhe.php" method="post">
            <div class="row justify-content-around">
                <div class="form-group col-md-4">
                    <label for="labelFornecedor">Fornecedor: </label>
                    <input readonly name="dornecedor" class="form-control" type="text" value="<?php echo $fornecedor['nome'] ?>">
                </div>
                <div class="form-group col-md-4">
                    <label>No Compra: </label>
                    <input readonly name="compra" class="form-control" type="text" value="<?php echo $compra['id'] ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="labelSubtotal">Total: </label>
                    <input readonly class="form-control" type="text" value="<?php echo $total_compra['total'] ?>">
                </div>
            </div>

            <div class="row justify-content-around">
                <div class="form-group col-md-4">
                    <label for="labelProduto">Produto </label>
                    <select class="form-control" name="produto">
                        <?php
                        foreach ($produtos as $produto) {
                        ?>
                            <option value=" <?php echo $produto['id'] ?> "> <?php echo $produto['descricao'] ?> </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="labelQuantidade">Quantidade: </label>
                    <input id="inputQuantidade" class="form-control" type="text" name="quantidade">
                </div>
                <div class="col-md-4">
                    <input class="btn btn-success mx-auto border-dark px-3" type="submit" value="Enviar">
                </div>
            </div>
            

        </form>

        <table class="table mt-5">
            <thead class="thead-dark">
                <tr>
                    <th>GTIN</th>
                    <th>Descrição</th>
                    <th>Quantidade</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <tr scope="row">
                    <?php foreach ($produtos as $produto) { ?>
                        <td><?php echo $produto['descricao'] ?></td>
                        <td><?php echo $produto['quantidade'] ?></td>
                        <td><?php echo $total_compra['total'] ?></td>
                    <?php } ?>
                </tr>
            </tbody>
        </table>
        <input class="btn btn-danger" type="button" value="Encerrar compra" onclick="javascript: location.href='..';">
    </div>
</body>

</html>