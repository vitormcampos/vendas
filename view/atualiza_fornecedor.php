<?php
include("nav.php");
include("../controller/conexao.php");
$id = $_GET['id'];
$consulta_sql =  @mysqli_query($conexao, "select * from fornecedor where id=$id") or die($mysqli->error);
$produto = mysqli_fetch_array($consulta_sql);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar fornecedor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <?php echo $varnav; ?>

    <div class="container-fluid my-5 p-5 rounded" style="width: 70vw; background-color: cornflowerblue;">
        <h3 class="text-center p-3 text-white">Alterar fornecedor</h3>
        <form action="../dao/Fornecedor.php" method="post">
            <div class="form-row justify-content-around">
                <div class="form-group col-md-4">
                    <label for="labelID">ID:</label>
                    <input readonly id="inputID" class="form-control" type="text" name="id" value='<?php echo $produto['id']; ?>'>
                </div>
                <div class="form-group col-md-4">
                    <label for="labelNome">Nome fantasia:</label>
                    <input id="inputNome" class="form-control" type="text" name="nomeF" value='<?php echo $produto['nome']; ?>'>
                </div>
                <div class="form-group col-md-4">
                    <label for="labelRSocial">Razão social: </label>
                    <input id="inputRSocial" class="form-control" type="text" name="nomeRS" value='<?php echo $produto['razao_social']; ?>'>
                </div>
                <div class="form-group col-md-4">
                    <label for="labelCNPJ">CNPJ:</label>
                    <input id="inputCNPJ" class="form-control" type="text" name="cnpj" value='<?php echo $produto['cnpj']; ?>'>
                </div>
            </div>
            <div class="form-row justify-content-around">
                <div class="form-group col-md-4">
                    <label for="labelNome">Endereço:</label>
                    <input id="inputEndereco" class="form-control" type="text" name="endereco" value='<?php echo $produto['endereco']; ?>'>
                </div>
                <div class="form-group col-md-4">
                    <label for="labelBairro">Bairro:</label>
                    <input id="inputBairro" class="form-control" type="text" name="bairro" value='<?php echo $produto['bairro']; ?>'>
                </div>
                <div class="form-group col-md-4">
                    <label for="labelComplemento">Complemento:</label>
                    <input id="inputComplemento" class="form-control" type="text" name="complemento" value='<?php echo $produto['complemento']; ?>'>
                </div>
            </div>
            <div class="form-row justify-content-around">
                <div class="form-group col-md-4">
                    <label for="labelCidade">Cidade:</label>
                    <input id="inputCidade" class="form-control" type="text" name="cidade" value='<?php echo $produto['cidade']; ?>'>
                </div>
                <div class="form-group col-md-4">
                    <label for="labelEstado">Estado:</label>
                    <select id="selectEstado" class="form-control" name="estado">
                        <option selected><?php echo $produto['estado']; ?></option>
                        <option value="SP">São Paulo</option>
                        <option value="AC">Acre</option>
                        <option value="RJ">Rio de Janeiro</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="labelCEP">CEP:</label>
                    <input id="inputCEP" class="form-control" type="text" name="cep" value='<?php echo $produto['cep']; ?>'>
                </div>
            </div>
            <div class="form-row justify-content-around">
                <div class="form-group col-md-4">
                    <label for="labelEmail">E-mail:</label>
                    <input id="inputEmail" class="form-control" type="text" name="email" value='<?php echo $produto['email']; ?>'>
                </div>
                <div class="form-group col-md-4">
                    <label for="labelTelefone">Telefone:</label>
                    <input id="inputTelefone" class="form-control" type="text" name="telefone" value='<?php echo $produto['telefone']; ?>'>
                </div>
                <div class="form-group col-md-4">
                    <label for="labelSite">Site:</label>
                    <input id="inputSite" class="form-control" type="text" name="site" value='<?php echo $produto['site']; ?>'>
                </div>
                <input class="btn btn-success border-dark px-3" type="submit" value="Alterar">
            </div>
        </form>

    </div>
</body>

</html>