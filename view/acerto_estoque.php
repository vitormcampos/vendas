<?php
include("../controller/conexao.php");
include("../view/nav.php");

function listaProdutos()
{
    global $conexao;
    $sql = "select id, descricao from produto";
    $comando = @mysqli_query($conexao, $sql);
    $produtos = [];
    while ($produto = mysqli_fetch_assoc($comando)) {
        array_push($produtos, $produto);
    }
    return $produtos;
}

$produtos = listaProdutos();
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerto Estoque</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>
    <?php echo get_navbar(); ?>

    <div class="container-fluid my-5 p-5 rounded" style="width: 70vw; background-color: cornflowerblue;">
        <h3 class="text-center p-3 text-white">Acerto de Estoque</h3>
        <form action="../dao/Estoque.php" method="post">
            <div class="row justify-content-around">
                <div class="form-group col-md-6">
                    <label for="labelCliente">Produto: </label>
                    <select class="form-control" name="produto" id="">
                        <?php
                        foreach ($produtos as $produto) {
                        ?>
                            <option value="<?php echo $produto['id'] ?>"><?php echo $produto['descricao'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="labelObservacao">Quantidade: </label>
                    <input id="inputObservacao" class="form-control" type="text" name="quantidade">
                </div>
            </div>
            <input class="btn btn-success mx-auto border-dark px-3" type="submit" value="Enviar">
    </div>

    </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>