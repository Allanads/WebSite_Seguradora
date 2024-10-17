<?php
session_start();
include_once("../conexao.php");

if(isset($_POST['nome'])) {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $result_cliente = "DELETE FROM e1_cliente WHERE nome = '$nome'";
    $resultado_cliente = mysqli_query($conn, $result_cliente);

    if ($resultado_cliente) {
        if (mysqli_affected_rows($conn) > 0) {
            $_SESSION['msg'] = "<h2><font color='green'>Cliente apagado com sucesso!!!</font></h2>";
        } else {
            $_SESSION['msg'] = "<h2><font color='red'>Cliente não encontrado.</font></h2>";
        }
    } else {
        $_SESSION['msg'] = "<h2><font color='red'>Erro ao excluir cliente: " . mysqli_error($conn) . "</font></h2>";
    }
    header("Location: cli_del_pro.php");
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
