<?php 
include("nav.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <?php echo $varnav; ?>
    <div class="container-fluid my-5 p-5 rounded" style="width: 70vw; background-color: cornflowerblue;">
        <h3 class="text-center p-5 text-white">Cadastro de Clientes</h3>
        <form method="post" action="../dao/Cliente.php">
            <div class="form-row justify-content-around">
                <div class="form-group col-md-4">
                    <label for="labelPrimeiroNome">Nome:</label>
                    <input class="form-control" type="text" name="nome" placeholder="Digie o nome">
                </div>
                <div class="form-group col-md-4">
                    <label for="labelUltimoNome">Sobrenome:</label>
                    <input class="form-control" type="text" name="ultimoNome" placeholder="Digite o sobrenome">
                </div>
                <div class="form-group col-md-4">
                    <label for="labelNascimento">Data de nascimento:</label>
                    <input class="form-control" type="date" name="nascimento">
                </div>
            </div>
            <div class="form-row justify-content-around p-2">
                <div class="form-group col-md-4">
                    <label for="labelCPF">CPF</label>
                    <input id="inputCPF" class="form-control" type="text" name="cpf">
                </div>
                <div class="form-group col-md-4">
                    <label for="labelRG">RG</label>
                    <input id="inputRG" class="form-control" type="text" name="rg">
                </div>
                <div class="form-group col-md-4">
                    <label for="labelEmail">E-mail</label>
                    <input id="inputEmail" class="form-control" type="email" name="email" placeholder="email@exemplo.com">
                </div>
            </div>
            <div class="form-row justify-content-around p-2">
                <div class="form-group col-md-4">
                    <label for="labelEndereco">Endereço</label>
                    <input id="inputEndereco" class="form-control" type="text" name="endereco">
                </div>
                <div class="form-group col-md-4">
                    <label for="labelComplemento">Complemento</label>
                    <input id="inputComplemento" class="form-control" type="text" name="complemento">
                </div>
                <div class="form-group col-md-4">
                    <label for="labelBairro">Bairro</label>
                    <input id="inputBairro" class="form-control" type="text" name="bairro">
                </div>
            </div>
            <div class="form-row justify-content-around p-2">
                <div class="form-group col-md-4">
                    <label for="labelCidade">Cidade</label>
                    <input id="inputCidade" class="form-control" type="text" name="cidade">
                </div>
                <div class="form-group col-md-4">
                    <label for="labelEstado">Text</label>
                    <select id="selectEstado" class="form-control" name="estado">
                        <option selected>Escolha um Estado</option>
                        <option value="SP">São Paulo</option>
                        <option value="AC">Acre</option>
                        <option value="RJ">Rio de Janeiro</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="labelCEP">CEP</label>
                    <input id="inputCEP" class="form-control" type="text" name="cep">
                </div>
            </div>
            <input class="btn btn-success px-3 border-dark" value="Enviar" type="submit">
        </form>
    </div>

</body>

</html>