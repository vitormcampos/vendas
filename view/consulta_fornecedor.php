<?php

include("../controller/conexao.php");
include("nav.php");
$sql = "select * from fornecedor";
$query = @mysqli_query($conexao, $sql) or die($mysqli->error);
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Consulta de fornecedores</title>
</head>

<body>

    <!-- Navbar -->
    <?php echo get_navbar(); ?>

    <!-- Tabela de fornecedores -->
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Razao Social</th>
                <th scope="col">CPNJ</th>
                <th scope="col">Telefone</th>
                <th scope="col">Site</th>
                <th scope="col">Email</th>
                <th scope="col">Endereço</th>
                <th scope="col">Complemento</th>
                <th scope="col">Bairro</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col">CEP</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php while ($dado = $query->fetch_array()) { ?>
                <tr>
                    <td><?php echo $dado['id'] ?></td>
                    <td><?php echo $dado['nome'] ?></td>
                    <td><?php echo $dado['razao_social'] ?></td>
                    <td><?php echo $dado['cnpj'] ?></td>
                    <td><?php echo $dado['telefone'] ?></td>
                    <td><?php echo $dado['site'] ?></td>
                    <td><?php echo $dado['email'] ?></td>
                    <td><?php echo $dado['endereco'] ?></td>
                    <td><?php echo $dado['complemento'] ?></td>
                    <td><?php echo $dado['bairro'] ?></td>
                    <td><?php echo $dado['cidade'] ?></td>
                    <td><?php echo $dado['estado'] ?></td>
                    <td><?php echo $dado['cep'] ?></td>
                    <td>
                        <a class="btn btn-warning" href="./atualiza_fornecedor.php?id=<?php echo $dado['id']; ?>">Alterar</a>
                        <a class="btn btn-danger" href="./atualiza_fornecedor.php?id=<?php echo $dado['id']; ?>">Excluir</a>
                        <input name="btn_alterar" id="" class="btn btn-info" type="button" value="Imprimir">
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>