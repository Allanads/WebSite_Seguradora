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
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Adicionando botões no topo da página -->
        <div id="top-buttons">
            <button onclick="window.location.href='../home.html'">Tela Inicial</button>
            <button onclick="window.location.href='cliente.html'">Voltar</button>
            <button onclick="window.location.href='../index.html'">Sair</button>
        </div>
        <br>
        <!-- Header -->
        <header id="header">
            <div class="logo">
                <span class="icon fa-user"></span>
            </div>
            <div class="content">
                <div class="inner">
                    <h1>Buscar clientes</h1>
        </header>
        </h1>
        <br>

        <?php

$cod = filter_input(INPUT_POST,'cod',FILTER_SANITIZE_NUMBER_INT);
$result_cliente = "SELECT cod,nome,cpf,rg,tel FROM e1_cliente WHERE cod=$cod";
$resultado_cliente = mysqli_query($conn, $result_cliente);

if ($row_cliente = mysqli_fetch_assoc($resultado_cliente)) {
	echo "<strong>Código:</strong> ".$row_cliente['cod']."<br>";
	echo "<strong>Nome:</strong> ".$row_cliente['nome']."<br>";
	echo "<strong>CPF:</strong> ".$row_cliente['cpf']."<br>";
	echo "<strong>RG:</strong> ".$row_cliente['rg']."<br>";
	echo "<strong>Telefone:</strong> ".$row_cliente['tel']."<br><br>";
}else{
	echo "Cliente não existe!!!!";
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