<?php
session_start();
include_once("../conexao.php");

?>
<!DOCTYPE HTML>
<html lang="pt">

<head>
    <title>WebSite Seguradora ATK</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
    <style>
        .error-msg {
            color: red;
            font-size: 37px;
            font-weight: bold;
        }

        .left-align {
            text-align: left;
        }
    </style>
</head>

<body class="is-preload">
    <div id="wrapper">
        <div id="top-buttons">
            <button onclick="window.location.href='../home.html'">Tela Inicial</button>
            <button onclick="window.location.href='ocorrencias.html'">Voltar</button>
            <button onclick="window.location.href='../index.html'">Sair</button>
        </div>
        <br>
        <header id="header">
            <div class="logo">
                <span class="icon"><i class="fas fa-newspaper"></i><i class="fas fa-pencil-alt"></i></span>
            </div>
            <div class="content">
                <div class="inner">
                    <h1>Dados da ocorrência</h1>
                </div>
            </div>
        </header>
        <br>
        <div class="inner">
            <?php
            // Verifica se o parâmetro 'cod' foi enviado via POST
            if (isset($_POST['cod'])) {
                $cod_ocorrencia = filter_input(INPUT_POST, 'cod', FILTER_SANITIZE_NUMBER_INT);

                // Consulta SQL para obter a ocorrência com o código especificado
                $sql_ocorrencia = "SELECT o.COD AS cod_ocorrencia, o.DATA_OCORRENCIA, o.LOCAL_OCORRENCIA, o.DESCRICAO_OCORRENCIA, v.cod AS cod_veiculo, v.placa, v.renavan, v.fabricante AS fabricante_veiculo, v.modelo AS modelo_veiculo, v.ano AS ano_veiculo, c.cod AS cod_cliente, c.nome, c.cpf, c.rg
                                    FROM e3_ocorrencias o
                                    INNER JOIN e2_veiculos v ON o.COD_VEICULO = v.COD
                                    INNER JOIN e1_cliente c ON o.COD_CLIENTE = c.COD
                                    WHERE o.COD = $cod_ocorrencia";
                $resultado_ocorrencia = mysqli_query($conn, $sql_ocorrencia);

                // Verifica se a consulta retornou algum resultado
                if ($resultado_ocorrencia && mysqli_num_rows($resultado_ocorrencia) > 0) {
                    $row_ocorrencia = mysqli_fetch_assoc($resultado_ocorrencia);
                    echo "<h2 class='left-align'>Informações da Ocorrência</h2>";
                    echo "<strong class='left-align'>Código da Ocorrência:</strong> " . $row_ocorrencia['cod_ocorrencia'] . "<br>";
                    echo "<strong class='left-align'>Data da Ocorrência:</strong> " . $row_ocorrencia['DATA_OCORRENCIA'] . "<br>";
                    echo "<strong class='left-align'>Local da Ocorrência:</strong> " . $row_ocorrencia['LOCAL_OCORRENCIA'] . "<br>";
                    echo "<strong class='left-align'>Descrição da Ocorrência:</strong> " . $row_ocorrencia['DESCRICAO_OCORRENCIA'] . "<br><br>";
                    echo "<h2 class='left-align'>Informações do Veículo</h2>";
                    echo "<strong class='left-align'>Código do Veículo:</strong> " . $row_ocorrencia['cod_veiculo'] . "<br>";
                    echo "<strong class='left-align'>Placa:</strong> " . $row_ocorrencia['placa'] . "<br>";
                    echo "<strong class='left-align'>Renavan:</strong> " . $row_ocorrencia['renavan'] . "<br>";
                    echo "<strong class='left-align'>Fabricante:</strong> " . $row_ocorrencia['fabricante_veiculo'] . "<br>";
                    echo "<strong class='left-align'>Modelo:</strong> " . $row_ocorrencia['modelo_veiculo'] . "<br>";
                    echo "<strong class='left-align'>Ano:</strong> " . $row_ocorrencia['ano_veiculo'] . "<br><br>";
                    echo "<h2 class='left-align'>Informações do Cliente</h2>";
                    echo "<strong class='left-align'>Código do Cliente:</strong> " . $row_ocorrencia['cod_cliente'] . "<br>";
                    echo "<strong class='left-align'>Nome:</strong> " . $row_ocorrencia['nome'] . "<br>";
                    echo "<strong class='left-align'>CPF:</strong> " . $row_ocorrencia['cpf'] . "<br>";
                    echo "<strong class='left-align'>RG:</strong> " . $row_ocorrencia['rg'] . "<br><br>";

                    // Exibe o botão de exclusão somente se a ocorrência foi encontrada
                    echo "<form method='POST' action='oco_del1.php'>
                            <input type='hidden' name='cod_ocorrencia' value='" . $row_ocorrencia['cod_ocorrencia'] . "'>
                            <button type='submit'>Excluir</button>
                          </form>";
                } else {
                    // Se a ocorrência não foi encontrada, exibe a mensagem de erro
                    echo "<span style='color:yellow; font-weight:bold;' class='left-align'>Ocorrência não encontrada!</span>";
                }
            }
            ?>
        </div>

        <br>

        <!-- Footer -->
        <footer id="footer">
            <p class="copyright"> WebSite By Company ATK</p>
        </footer>
    </div>
    <div id="bg"></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>