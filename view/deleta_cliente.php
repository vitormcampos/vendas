<?php
include("nav.php");
include("../controller/conexao.php");
$id = $_GET['id'];
$consulta_sql =  @mysqli_query($conexao, "select * from cliente where id=$id") or die($mysqli->error);
$cliente = mysqli_fetch_array($consulta_sql);
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
        <h3 class="text-center p-5 text-white">Alterar Clientes</h3>
        <form method="post" action="../dao/Cliente.php">
            <div class="form-row justify-content-around">
                <div class="form-group col-md-4">
                    <label for="labelID">ID:</label>
                    <input readonly id="inputID" class="form-control" type="text" name="id" value='<?php echo $cliente['id']; ?>' readonly>
                </div>
                <div class="form-group col-md-4">
                    <label for="labelPrimeiroNome">Nome:</label>
                    <input class="form-control" type="text" name="nome" value='<?php echo $cliente['nome']; ?>' readonly>
                </div>
                <div class="form-group col-md-4">
                    <label for="labelUltimoNome">Sobrenome:</label>
                    <input class="form-control" type="text" name="ultimoNome" value='<?php echo $cliente['sobrenome']; ?>' readonly>
                </div>
                <div class="form-group col-md-4">
                    <label for="labelNascimento">Data de nascimento:</label>
                    <input class="form-control" type="date" name="nascimento" value='<?php echo $cliente['data_nascimento']; ?>' readonly>
                </div>
            </div>
            <div class="form-row justify-content-around p-2">
                <div class="form-group col-md-4">
                    <label for="labelCPF">CPF</label>
                    <input id="inputCPF" class="form-control" type="text" name="cpf" value='<?php echo $cliente['cpf']; ?>' readonly>
                </div>
                <div class="form-group col-md-4">
                    <label for="labelRG">RG</label>
                    <input id="inputRG" class="form-control" type="text" name="rg" value='<?php echo $cliente['rg']; ?>' readonly>
                </div>
                <div class="form-group col-md-4">
                    <label for="labelEmail">E-mail</label>
                    <input id="inputEmail" class="form-control" type="email" name="email"  value='<?php echo $cliente['email']; ?>' readonly>
                </div>
            </div>
            <div class="form-row justify-content-around p-2">
                <div class="form-group col-md-4">
                    <label for="labelEndereco">Endereço</label>
                    <input id="inputEndereco" class="form-control" type="text" name="endereco" value='<?php echo $cliente['endereco']; ?>' readonly>
                </div>
                <div class="form-group col-md-4">
                    <label for="labelComplemento">Complemento</label>
                    <input id="inputComplemento" class="form-control" type="text" name="complemento" value='<?php echo $cliente['complemento']; ?>' readonly>
                </div>
                <div class="form-group col-md-4">
                    <label for="labelBairro">Bairro</label>
                    <input id="inputBairro" class="form-control" type="text" name="bairro" value='<?php echo $cliente['bairro']; ?>' readonly>
                </div>
            </div>
            <div class="form-row justify-content-around p-2">
                <div class="form-group col-md-4">
                    <label for="labelCidade">Cidade</label>
                    <input id="inputCidade" class="form-control" type="text" name="cidade" value='<?php echo $cliente['cidade']; ?>' readonly>
                </div>
                <div class="form-group col-md-4">
                    <label for="labelEstado">Estado</label>
                    <select id="selectEstado" class="form-control" name="estado" >
                        <option selected><?php echo $cliente['estado']; ?></option>
                        <option value="SP">São Paulo</option>
                        <option value="AC">Acre</option>
                        <option value="RJ">Rio de Janeiro</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="labelCEP">CEP</label>
                    <input id="inputCEP" class="form-control" type="text" name="cep" value='<?php echo $cliente['cep']; ?>' readonly>
                </div>
            </div>
            <input class="btn btn-danger px-3 border-dark" value="Deletar" type="submit">
        </form>
    </div>

</body>

</html>