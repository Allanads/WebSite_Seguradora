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
            font-size: 27px; /* Tamanho da fonte aumentado novamente */
            font-weight: bold; /* Deixando o texto em negrito */
        }
    </style>
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Adicionando botões no topo da página -->
        <div id="top-buttons">
            <button onclick="window.location.href='../home.html'">Tela Inicial</button>
            <button onclick="window.location.href='automovel.html'">Voltar</button>
            <button onclick="window.location.href='../index.html'">Sair</button>
        </div>
        <br>
        <!-- Header -->
        <header id="header">
            <div class="logo">
                <span class="icon"><i class="fas fa-car-side"></i></span>
            </div>
            <div class="content">
                <div class="inner">
                    <h1>Buscar veículo</h1>
                </div>
        </header>
        </h1>
        
        <?php
        $result_veiculo = "SELECT cod,placa,renavan,fabricante,modelo,ano FROM e2_veiculos";
        $resultado_veiculo = mysqli_query($conn, $result_veiculo);

        // Verificando se há registros de veículos
        if (mysqli_num_rows($resultado_veiculo) == 0) {
            echo '<p class="error-msg">Não existe nenhum veículo cadastrado no sistema.</p>';
        } else {
            // Exibindo detalhes do veículo
            while ($row_veiculo = mysqli_fetch_assoc($resultado_veiculo)) {
                echo "<strong>Código:</strong> " . $row_veiculo['cod'] . "<br>";
                echo "<strong>Placa:</strong> " . $row_veiculo['placa'] . "<br>";
                echo "<strong>Renavan:</strong> " . $row_veiculo['renavan'] . "<br>";
                echo "<strong>Fabricante:</strong> " . $row_veiculo['fabricante'] . "<br>";
                echo "<strong>Modelo:</strong> " . $row_veiculo['modelo'] . "<br>";
                echo "<strong>Ano:</strong> " . $row_veiculo['ano'] . "<br><br>";
                echo "<hr><br>";
            }
        }
        ?>

        </header>

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
