<?php
include('php/conexao.php');
$rank = 0
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/as.ico" type="img/x-icon">
    <script src="https://cdn.jsdelivr.net/gh/brunoalbim/devtools-detect/index.js"></script>
    <script src="js/bloquear.js"></script>
    <title>Login</title>
</head>

<body>

    <form class="login_form" action="PAGE/game.html">

        <div class="login_header">
            <img class='personagem' id='personagem' src="img/game.png" alt="personagem">
            <input autocomplete="off" type="text" placeholder="Digite o seu nome " class="login_input" id="login_input" maxlength="10">
            <button type="submit" class="login_button" disabled>PLAY</button>

            <br>
            <div class="placar">
                <div class="rankinglocal">
                    <h6>Sua Maior pontuação</h6>
                    <h6 type="text" id="historico-nome" class=" historico-nome"></h6>
                    <h6 type="text" id="historico-score" class=" historico-score"> </h6>
                </div>


                <section class="ranking">
                    <h1>RANKING</h1>
                    <table width="200px">
                        <tr>
                            <th>Posição</th>
                            <th>Nome</th>
                            <th>Pontos</th>
                        </tr>
                        <?php
                        if ((!$conexao)) {
                        ?>
                            <tr>
                                <td colspan="9">Aguardando pesquisa...</td>
                            </tr>
                            <?php
                        } else {


                            $consulta = 'SELECT DISTINCT nome, pontos From ranking ORDER BY pontos DESC  limit 5 ';

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
                                        <td><?php echo $rank += 1; ?></td>
                                        <td><?php echo strip_tags($dados['nome']); ?></td>
                                        <td><?php echo strip_tags($dados['pontos']); ?></td>

                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        <?php
                        }
                        ?>
                    </table>
                </section>
            </div>
        </div>

    </form>
</body>
<script src="js/login.js" defer></script>

</html>