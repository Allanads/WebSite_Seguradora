<?php
// Verifica se a sessão já foi iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include_once("../conexao.php");

?>
<!DOCTYPE HTML>
<html lang="pt">

<head>
    <title>WebSite Seguradora ATK</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
    <style>
        .error-msg {
            color: red;
            font-size: 27px;
            font-weight: bold;
        }

        .left-align {
            text-align: left;
        }
    </style>
</head>

<body class="is-preload">
    <div id="wrapper">
        <div id="top-buttons">
            <button onclick="window.location.href='../home.html'">Tela Inicial</button>
            <button onclick="window.location.href='ocorrencias.html'">Voltar</button>
            <button onclick="window.location.href='../index.html'">Sair</button>
        </div>
        <br>
        <header id="header">
            <div class="logo">
                <span class="icon"><i class="fas fa-newspaper"></i><i class="fas fa-pencil-alt"></i></span>
            </div>
            <div class="content">
                <div class="inner">
                <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o ID da ocorrência foi enviado
    if (isset($_POST['cod_ocorrencia'])) {
        $cod_ocorrencia = $_POST['cod_ocorrencia'];

        // Query para excluir a ocorrência
        $sql = "DELETE FROM e3_ocorrencias WHERE COD = '$cod_ocorrencia'";
        if (mysqli_query($conn, $sql)) {
            echo "<h2><strong><font color='yellow'>Ocorrência excluída com sucesso.</strong></font></h2>";
        } else {
            echo "<label><strong>Erro ao excluir ocorrência: </label></strong>" . mysqli_error($conn);
        }
    } else {
        echo "<label><strong>Código da ocorrência não foi enviado.</label></strong>";
    }
} else {
    echo "<label><strong>Acesso inválido.</label></strong>";
}
?>
                </div>
            </div>
        </header>
        <br>


        

        <br>
        <button onclick="window.location.href='oco_del.php'">Nova Consulta</button><br>


        <!-- Footer -->
        <footer id="footer">
            <p class="copyright"> WebSite By Company ATK</p>
        </footer>
    </div>
    <div id="bg"></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
