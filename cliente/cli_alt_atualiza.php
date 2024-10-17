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

        <!-- Botões no topo da página -->
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
		$cod=$_POST['cod'];
		$nome=$_POST['nome'];
		$rg=$_POST['rg'];
		$cpf=$_POST['cpf'];
		
		$result_cliente = "UPDATE e1_cliente SET cod='$cod',nome='$nome',rg='$rg',cpf='$cpf' WHERE cod='$cod'";
		$resultado_cliente = mysqli_query($conn, $result_cliente);
		echo "<h2><font color='green'>Atualizado com sucesso!</font></h2>";

	?>
	<center>
<form method="post" name="consultar_cliente" action="cli_alt_cons.php">
	<label>Fazer nova alteração ? </label>
	<input type="submit" name="voltar" value="Voltar"> 
</form>

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

