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
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <style>
        .error-msg {
            color: red;
            font-size: 27px;
            font-weight: bold;
        }
    </style>
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Adicionando botões no topo da página -->
        <div id="top-buttons">
            <button onclick="window.location.href='../home.html'">Tela Inicial</button>
            <button onclick="window.location.href='ocorrencias.html'">Voltar</button>
            <button onclick="window.location.href='../index.html'">Sair</button>
        </div>
        <br>
        <!-- Header -->
        <header id="header">
            <div class="logo">
                <span class="icon"><i class="fas fa-newspaper"></i><i class="fas fa-pencil-alt"></i></span>
            </div>
            <div class="content">
                <div class="inner">
                    <h1>Buscar todas ocorrências</h1>
                </div>
            </div>
        </header>
        <br>

        <?php
        // Consulta SQL para obter todas as ocorrências
        global $conn;
        // Consulta SQL para obter as informações da ocorrência
        $sql_ocorrencia = "SELECT o.COD AS cod_ocorrencia, o.DATA_OCORRENCIA, o.LOCAL_OCORRENCIA, o.DESCRICAO_OCORRENCIA, v.cod AS cod_veiculo, v.placa, v.renavan, v.fabricante AS fabricante_veiculo, v.modelo AS modelo_veiculo, v.ano AS ano_veiculo, c.cod AS cod_cliente, c.nome, c.cpf, c.rg
                                FROM e3_ocorrencias o
                                INNER JOIN e2_veiculos v ON o.COD_VEICULO = v.COD
                                INNER JOIN e1_cliente c ON o.COD_CLIENTE = c.COD";
        $resultado_ocorrencia = mysqli_query($conn, $sql_ocorrencia);

        // Verifica se a consulta retornou algum resultado
        if ($resultado_ocorrencia && mysqli_num_rows($resultado_ocorrencia) > 0) {
            // Loop através de todas as ocorrências encontradas
            while ($row_ocorrencia = mysqli_fetch_assoc($resultado_ocorrencia)) {
                echo "<h2>Informações da Ocorrência</h2>";
                echo "<strong>Código da Ocorrência:</strong> " . $row_ocorrencia['cod_ocorrencia'] . "<br>";
                echo "<strong>Data da Ocorrência:</strong> " . $row_ocorrencia['DATA_OCORRENCIA'] . "<br>";
                echo "<strong>Local da Ocorrência:</strong> " . $row_ocorrencia['LOCAL_OCORRENCIA'] . "<br>";
                echo "<strong>Descrição da Ocorrência:</strong> " . $row_ocorrencia['DESCRICAO_OCORRENCIA'] . "<br><br>";
                echo "<h3>Informações do Veículo</h3>";
                echo "<strong>Código do Veículo:</strong> " . $row_ocorrencia['cod_veiculo'] . "<br>";
                echo "<strong>Placa:</strong> " . $row_ocorrencia['placa'] . "<br>";
                echo "<strong>Renavan:</strong> " . $row_ocorrencia['renavan'] . "<br>";
                echo "<strong>Fabricante:</strong> " . $row_ocorrencia['fabricante_veiculo'] . "<br>";
                echo "<strong>Modelo:</strong> " . $row_ocorrencia['modelo_veiculo'] . "<br>";
                echo "<strong>Ano:</strong> " . $row_ocorrencia['ano_veiculo'] . "<br><br>";
                echo "<h3>Informações do Cliente</h3>";
                echo "<strong>Código do Cliente:</strong> " . $row_ocorrencia['cod_cliente'] . "<br>";
                echo "<strong>Nome:</strong> " . $row_ocorrencia['nome'] . "<br>";
                echo "<strong>CPF:</strong> " . $row_ocorrencia['cpf'] . "<br>";
                echo "<strong>RG:</strong> " . $row_ocorrencia['rg'] . "<br><br>";
                echo "<br><br>";
            }
        } else {
            echo "<span class='error-msg'>Nenhuma ocorrência encontrada!</span>";
        }
        ?>

        <button onclick="window.location.href='oco_cons1.php'">Nova Consulta</button><br>

        <!-- Footer -->
        <footer id="footer">
            <p class="copyright"> WebSite By Company ATK</p>
        </footer>

    </div>

    <!-- BG -->
    <div id="bg"></div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
