<?php
session_start();
include_once("../conexao.php");

if(isset($_POST['placa'])) {
    $placa = filter_input(INPUT_POST, 'placa', FILTER_SANITIZE_STRING);
    $result_veiculo = "DELETE FROM e2_veiculos WHERE placa = '$placa'";
    $resultado_veiculo = mysqli_query($conn, $result_veiculo);

    if ($resultado_veiculo) {
        if (mysqli_affected_rows($conn) > 0) {
            $_SESSION['msg'] = "<h2><font color='green'>Veículo apagado com sucesso!!!</font></h2>";
        } else {
            $_SESSION['msg'] = "<h2><font color='red'>Veículo não encontrado.</font></h2>";
        }
    } else {
        $_SESSION['msg'] = "<h2><font color='red'>Erro ao excluir veículo: " . mysqli_error($conn) . "</font></h2>";
    }
    header("Location: vei_del_pro.php"); // Substitua 'sua_pagina.php' pelo nome do seu arquivo PHP atual
    exit();
}
?>
<!DOCTYPE HTML>
<html lang="pt">

<head>
    <title>WebSite Seguradora ATK</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
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
        </header>
        </h1>
        

        <?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
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