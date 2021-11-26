<?php
include("nav.php");
include("../controller/conexao.php");
$id = $_GET['id'];
$consulta_sql =  @mysqli_query($conexao, "select * from produto where id=$id") or die($mysqli->error);
$produto = mysqli_fetch_array($consulta_sql);

$sql = "select * from fornecedor";
$query = @mysqli_query($conexao, $sql) or die($mysqli->error);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <?php echo get_navbar(); ?>
    <div class="container-fluid my-5 p-5 rounded" style="width: 70vw; background-color: cornflowerblue;">
        <h3 class="text-center p-3 text-white">Alterar Produto</h3>
        <form action="..\dao\Produto.php" method="post">
            <div class="row justify-content-around">
                <div class="form-group col-md-4">
                    <label for="labelID">ID:</label>
                    <input readonly id="inputID" class="form-control" type="text" name="id" value='<?php echo $produto['id']; ?>'>
                </div>
                <div class="form-group col-md-4">
                    <label for="labelDescricao">Descrição: </label>
                    <input id="inputDescricao" class="form-control" type="text" name="descricao" value='<?php echo $produto['descricao']; ?>'>
                </div>
                <div class="form-group col-md-4">
                    <label for="labelcdg">Codigo de barras:</label>
                    <input id="inputcdg" class="form-control" type="text" name="codigo" value='<?php echo $produto['gtin']; ?>'>
                </div>
            </div>
            <div class="row justify-content-around">
                <div class="form-group col-md-4">
                    <label for="labelQuantidade">Quantidade inicial:</label>
                    <input id="inputQuantidade" class="form-control" type="text" name="quantidade" value='<?php echo $produto['quantidade']; ?>'>
                </div>
                <div class="form-group col-md-4">
                    <label for="labelPreco">Preço: </label>
                    <input id="inputPreco" class="form-control" type="text" name="preco" value='<?php echo $produto['preco']; ?>'>
                </div>
                <div class="form-group col-md-4">
                    <label for="labelFornecedor">Fornecedor:</label><br>
                    <select name="fornecedor" class="custom-select">
                        <option selected value="">Escolha um opção:</option>
                        <?php while ($dado = $query->fetch_array()) { ?>
                            <option class="dropdown-item" value="<?php echo $dado['id'] ?>"><?php echo $dado['nome'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <input class="btn btn-success mx-auto border-dark px-3" type="submit" value="Alterar">
            </div>

        </form>

    </div>
</body>

</html>