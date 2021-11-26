<?php
include("nav.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de fornecedor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <?php echo get_navbar(); ?>

    <div class="container-fluid my-5 p-5 rounded" style="width: 70vw; background-color: cornflowerblue;">
        <h3 class="text-center p-3 text-white">Cadastro de fornecedor</h3>
        <form action="../dao/Fornecedor.php" method="post">
            <div class="form-row justify-content-around">
                <div class="form-group col-md-4">
                    <label for="labelNome">Nome fantasia:</label>
                    <input id="inputNome" class="form-control" type="text" name="nomeF">
                </div>
                <div class="form-group col-md-4">
                    <label for="labelRSocial">Razão social: </label>
                    <input id="inputRSocial" class="form-control" type="text" name="nomeRS">
                </div>
                <div class="form-group col-md-4">
                    <label for="labelCNPJ">CNPJ:</label>
                    <input id="inputCNPJ" class="form-control" type="text" name="cnpj">
                </div>
            </div>
            <div class="form-row justify-content-around">
                <div class="form-group col-md-4">
                    <label for="labelNome">Endereço:</label>
                    <input id="inputEndereco" class="form-control" type="text" name="endereco">
                </div>
                <div class="form-group col-md-4">
                    <label for="labelBairro">Bairro:</label>
                    <input id="inputBairro" class="form-control" type="text" name="bairro">
                </div>
                <div class="form-group col-md-4">
                    <label for="labelComplemento">Complemento:</label>
                    <input id="inputComplemento" class="form-control" type="text" name="complemento">
                </div>
            </div>
            <div class="form-row justify-content-around">
                <div class="form-group col-md-4">
                    <label for="labelCidade">Cidade:</label>
                    <input id="inputCidade" class="form-control" type="text" name="cidade">
                </div>
                <div class="form-group col-md-4">
                    <label for="labelEstado">Estado:</label>
                    <select id="selectEstado" class="form-control" name="estado">
                        <option selected>Escolha um Estado</option>
                        <option value="SP">São Paulo</option>
                        <option value="AC">Acre</option>
                        <option value="RJ">Rio de Janeiro</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="labelCEP">CEP:</label>
                    <input id="inputCEP" class="form-control" type="text" name="cep">
                </div>
            </div>
            <div class="form-row justify-content-around">
                <div class="form-group col-md-4">
                    <label for="labelEmail">E-mail:</label>
                    <input id="inputEmail" class="form-control" type="text" name="email">
                </div>
                <div class="form-group col-md-4">
                    <label for="labelTelefone">Telefone:</label>
                    <input id="inputTelefone" class="form-control" type="text" name="telefone">
                </div>
                <div class="form-group col-md-4">
                    <label for="labelSite">Site:</label>
                    <input id="inputSite" class="form-control" type="text" name="site">
                </div>
                <input class="btn btn-success border-dark px-3" type="submit" value="Enviar">
            </div>
        </form>

    </div>
</body>

</html>