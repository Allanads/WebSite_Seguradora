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
        <br>

        <?php
		$cod=$_POST['cod'];
		$placa=$_POST['placa'];
		$renavan=$_POST['renavan'];
		$fabricante=$_POST['fabricante'];
		$modelo=$_POST['modelo'];
		$ano=$_POST['ano'];

		$result_veiculo = "UPDATE e2_veiculos SET cod='$cod',placa='$placa',renavan='$renavan',fabricante='$fabricante',modelo='$modelo',ano='$ano' WHERE cod='$cod'";
		$resultado_veiculo = mysqli_query($conn, $result_veiculo);
		echo "<h2><font color='green'>Atualizado com sucesso!</font></h2>";

	?>
	<br>
	<center>
<form method="post" name="consultar_veiculo" action="vei_alt_cons.php">
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

