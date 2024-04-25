<?php
session_start();
include_once("../conexao.php")
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
            <div class="form-container">
                <form method="POST" action="cli_cons2_pro.php">
                    <label>DIGITE O CÓDIGO PARA BUSCAR OS DADOS DO CLIENTE: </label>
                    <center>
					<input type="text" required name="nome" placeholder="Digite o nome do cliente"><br>
                    <input type="submit" name="Consultar" value="Consultar">
                </form>
             </div>
             <div class="form-container">
                <form method="POST" action="cli_consx.php">
                    <label> Pesquisar todos clientes: </label>
					<center>
                    <input type="submit" name="Consultar" value="Consultar tudo">
                </form>
             </div>
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