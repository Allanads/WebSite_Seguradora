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
$cod = filter_input(INPUT_POST,'cod',FILTER_SANITIZE_STRING);
$result_cliente = "SELECT cod,nome,rg,cpf,tel FROM e1_cliente WHERE cod=$cod";
$resultado_cliente = mysqli_query($conn, $result_cliente);
$row_cliente;
?>
<form method="POST" name="alterar_cliente" action="cli_alt_atualiza.php">
<?php
if ($row_cliente = mysqli_fetch_assoc($resultado_cliente)) {

			
	        echo "CONSTA NA NOSSA BASE DE DADOS O CLIENTE:<BR>";

			echo "<h1><font color='green'>Para realizar a alteração preencha os campos abaixo:</font></h1><BR>";


			echo "<label>código....:</label>
					<input name='cod' type='number' placeholder=' ".$row_cliente['cod']."'><br></br>";
			
			echo "<label>Nome......:</label>
					<input name='nome' type='text' placeholder=' ".$row_cliente['nome']."'><br></br>";
			
			echo "<label>CPF.......:</label>
					<input name='cpf' type='number' placeholder=' ".$row_cliente['cpf']."'><br></br>";

			echo "<label>RG........:</label>
					<input name='rg' type='number' placeholder=' ".$row_cliente['rg']."'><br></br>";

			echo "<label>Telefone..:</label>
					<input name='tel' type='number' placeholder=' ".$row_cliente['tel']."'><br></br>";

			echo "<input type='submit' name='Atualiza' value='Atualiza'> ";

}else{
			echo "<h2><font color='red'>Cliente não existe!!!!!</font></h2>";
}
?>
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