<?php
session_start();
include('../php/conexao.php');

if($_SESSION['usuarioL'] == '' && $_SESSION['senhaL'] == ''){
    echo  '<script>
            window.location.href="../index.html";
        </script>';
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bancoDeDados.css">
    <link rel="stylesheet" type="text/css" href="../css/bancoDeDados.css?v=<?= filemtime($file); ?>">
    <link rel="shortcut icon" href="../imagem/as.ico" type="img/x-icon">
    <script src="https://cdn.jsdelivr.net/gh/brunoalbim/devtools-detect/index.js"></script>
    <title>sistema de busca</title>
</head>

<body>

    <header>
        <button class="cadastro"><a href="../banco/cadastro.php">
                < CADASTRAR</a></button>



        <h1>Banco de Dados</h1>
        <form action="">
            <input name="busca" type="text" value="<?php if (isset($_GET['busca'])) echo $_GET['busca']; ?>" placeholder="Digite a pesquisa">
            <button class="btn-pesquisa" type="submit">Pesquisa</button>
        </form>
    </header>

    <div id="tabela">
        <table width="500px">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Sexo</th>
                <th>Data nascimento</th>
                <th>Cep</th>
                <th>Cidade</th>
                <th>Estado</th>
            </tr>
            <?php
            if (!isset($_GET['busca'])) {

                $consulta = "SELECT* FROM usuarios LIMIT 5 ";
                $sql_consulta = $conexao->query($consulta) or die("ERRO ao consultar" . $mysqli->error);
                while ($dados = $sql_consulta->fetch_assoc()) {

            ?>
                    <tr>

                        <td><?php echo  htmlentities($dados['id']); ?></td>
                        <td><?php echo  htmlentities($dados['nome']); ?></td>
                        <td><?php echo  htmlentities($dados['email']); ?></td>
                        <td><?php echo  htmlentities($dados['telefone']); ?></td>
                        <td><?php echo  htmlentities($dados['sexo']); ?></td>
                        <td><?php echo  htmlentities($dados['data_nasc']); ?></td>
                        <td><?php echo  htmlentities($dados['cep']); ?></td>
                        <td><?php echo  htmlentities($dados['cidade']); ?></td>
                        <td><?php echo  htmlentities($dados['estado']); ?></td>

                    </tr>
                <?php


                }
            } else {
                // trata o erro de select inject
                $pesquisa = $conexao->real_escape_string($_GET['busca']);

                $consulta = "SELECT* FROM usuarios WHERE nome LIKE '%$pesquisa%' AND  id  LIMIT 5 ";
                $sql_consulta = $conexao->query($consulta) or die("ERRO ao consultar" . $mysqli->error);

                if ($sql_consulta->num_rows == 0) {
                ?>
                    <tr>
                        <td colspan="9">nenhum encontrado</td>
                    </tr>
                    <?php
                } else {
                    while ($dados = $sql_consulta->fetch_assoc()) {
                    ?>
                        <tr>

                            <td><?php echo  htmlentities($dados['id']); ?></td>
                            <td><?php echo  htmlentities($dados['nome']); ?></td>
                            <td><?php echo  htmlentities($dados['email']); ?></td>
                            <td><?php echo  htmlentities($dados['telefone']); ?></td>
                            <td><?php echo  htmlentities($dados['sexo']); ?></td>
                            <td><?php echo  htmlentities($dados['data_nasc']); ?></td>
                            <td><?php echo  htmlentities($dados['cep']); ?></td>
                            <td><?php echo  htmlentities($dados['cidade']); ?></td>
                            <td><?php echo  htmlentities($dados['estado']); ?></td>

                        </tr>
                <?php

                    }
                }
                ?>

            <?php
            }
            ?>
        </table>

    </div>

</body>
<script src="../js/bloquear.js"></script>

</html>