<?php
include("nav.php");
include("../controller/conexao.php");

// Consulta a ultima venda 
$venda_sql = @mysqli_query($conexao, "select * from venda_cabecalho order by id desc limit 1") or die($mysqli->error);
$venda = mysqli_fetch_assoc($venda_sql);

// Consulta cliente da venda
$cliente_sql = @mysqli_query($conexao, "select * from cliente where id = " . $venda['cliente_id']);
$cliente = mysqli_fetch_assoc($cliente_sql);

// Consulta produtos vendidos
$produtos_sql = @mysqli_query($conexao, "select p.descricao, vd.valor, vd.quantidade
                                        from venda_detalhe vd
                                        inner join produto p
                                        on vd.produto_id = p.id and vd.venda_id = " . $venda['id']);
$produto_venda = mysqli_fetch_assoc($produtos_sql);

// Total da venda
$total_sql = @mysqli_query($conexao, "select sum(valor) as total from venda_detalhe where venda_id = " . $venda['id']);
$total_venda = mysqli_fetch_assoc($total_sql);

function listaProdutos($conexao)
{
    $sql = @mysqli_query($conexao, "select * from produto");
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
    <title>Venda</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <?php echo $varnav; ?>

    <div class="container-fluid my-5 p-5 rounded" style="width: 70vw; background-color: cornflowerblue;">
        <h3 class="text-center p-3 text-white">Venda</h3>
        <form action="../dao/VendaDetalhe.php" method="post">
            <div class="row justify-content-around">
                <div class="form-group col-md-4">
                    <label for="labelCliente">Cliente: </label>
                    <input readonly name="<?php echo $cliente['id'] ?>" class="form-control" type="text" value="<?php echo $cliente['nome'] ?>">
                </div>
                <div class="form-group col-md-4">
                    <label>No venda: </label>
                    <input readonly name="venda" class="form-control" type="text" value="<?php echo $venda['id'] ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="labelSubtotal">Total: </label>
                    <input readonly class="form-control" type="text" value="<?php echo $total_venda['total'] ?>">
                </div>
            </div>

            <div class="row justify-content-around">
                <div class="form-group col-md-4">
                    <label for="labelProduto">Produto </label>
                    <select class="form-control" name="produto">
                        <?php
                        foreach ($produtos as $produto) {
                        ?>
                            <option value="<?php echo $produto['id'] ?>"><?php echo $produto['descricao'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="labelQuantidade">Quantidade: </label>
                    <input id="inputQuantidade" class="form-control" type="text" name="quantidade">
                </div>
                <div class="form-group col-md-4">
                    <label for="labelSubtotal">Subtotal: </label>
                    <input readonly class="form-control" type="text" value="">
                </div>
            </div>
            <input class="btn btn-success mx-auto border-dark px-3" type="submit" value="Enviar">

        </form>

        <table class="table mt-5">
            <thead class="thead-dark">
                <tr>
                    <th>Descrição</th>
                    <th>Quantidade</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <tr scope="row">
                    <?php foreach($produtos as $produto) {?>
                    <td><?php echo $produto_venda['descricao'] ?></td>
                    <td><?php echo $produto_venda['quantidade'] ?></td>
                    <td><?php echo $total_venda['total'] ?></td>
                <?php }?>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>