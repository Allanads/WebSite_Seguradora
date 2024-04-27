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
                    <h1>Buscar cliente</h1>
                </div>
            </div>
        </header>
        <br>

        <?php
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $result_cliente = "SELECT cod, nome, cpf, rg FROM e1_cliente WHERE nome='$nome'";
        $resultado_cliente = mysqli_query($conn, $result_cliente);
        $row_cliente = mysqli_fetch_assoc($resultado_cliente);
        ?>

        <form method="POST" name="alterar_cliente" action="cli_alt_atualiza.php">
            <?php
            if ($row_cliente) {
                echo "<div style='text-align: center;'>CONSTA NA NOSSA BASE DE DADOS O CLIENTE<br><br></div>";
                echo "<h4>Para realizar a alteração preencha os campos abaixo:</font></h4>";

                echo "<label>Código:</label>
                <input name='cod' type='text' value='" . $row_cliente['cod'] . "' readonly><br>";

                echo "<label>Nome:</label>
                <input name='nome' type='text' value='" . $row_cliente['nome'] . "'><br>";

                echo "<label>CPF:</label>
                <input name='cpf' type='text' value='" . $row_cliente['cpf'] . "' maxlength='11'><br>";

                echo "<label>RG:</label>
                <input name='rg' type='text' value='" . $row_cliente['rg'] . "' maxlength='10'><br>";

                echo "<input type='submit' name='Atualiza' value='Atualiza'> ";
            } else {
                echo "<h2><font color='red'>Cliente não existe!!!!!</font></h2>";
            }
            ?>
        </form>

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
