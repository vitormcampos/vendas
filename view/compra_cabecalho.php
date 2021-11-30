<?php
include("nav.php");
include("../controller/conexao.php");

function listaFornecedores($conexao)
{
    $sql = mysqli_query($conexao, "select * from fornecedor order by nome");
    $fornecedores = [];
    while($fornecedor = mysqli_fetch_assoc($sql))
    {
        array_push($fornecedores, $fornecedor);
    }
    return $fornecedores;
}

$fornecedores = listaFornecedores($conexao);
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
    <?php echo get_navbar(); ?>

    <div class="container-fluid my-5 p-5 rounded" style="width: 70vw; background-color: cornflowerblue;">
        <h3 class="text-center p-3 text-white">Entrada</h3>
        <form action="../dao/CompraCabecalho.php" method="post">
            <div class="row justify-content-around">
                <div class="form-group col-md-6">
                    <label for="labelFornecedor">Nome do Fornecedor </label>
                    <select class="form-control" name="fornecedor" id="">
                        <?php
                        foreach($fornecedores as $fornecedor)
                        { 
                            ?>
                            <option value="<?php echo $fornecedor['id']?>"><?php echo $fornecedor['nome']?></option>
                        <?php }?>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="labelObservacao">Observação: </label>
                    <input id="inputObservacao" class="form-control" type="text" name="observacao">
                </div>
            </div>
                <input class="btn btn-success mx-auto border-dark px-3" type="submit" value="Enviar">
            </div>

        </form>

    </div>
</body>

</html>