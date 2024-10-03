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
                    <h1>Buscar ocorrência para exclusão</h1>
                </header>
            </h1>
			<br>
            <div class="form-container">
                <form method="POST" action="oco_del_pro.php">
                    <label>DIGITE CÓDIGO DA OCORRÊNCIA PARA EXCLUÍ-LO: </label>
                    <center>
                        <input type="text" required name="cod" placeholder="Digite o código da ocorrência"><br>
                        <input type="submit" name="Consultar" value="Consultar">
                    </center>
                </form>
            </div>
        </header>
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