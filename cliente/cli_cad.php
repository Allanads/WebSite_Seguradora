<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="pt">

<head>
    <title>Inclusão de Clientes - Seguradora ATK</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- jQuery Mask Plugin para aplicar a máscara no telefone -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
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
                    <h1>Inclusão de Clientes</h1>
                </div>
            </div>
        </header>
        <br>

        <?php 
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>

        <div class="form-container-cli">
            <form method="POST" action="cli_pro.php">
                <label>Nome: </label>
                <input type="text" id="nome" name="nome" maxlength="30" required placeholder="Digite o Nome do Cliente">
                <div id="nome-msg"></div><br>

                <label>CPF: </label>
                <input type="text" id="cpf" name="cpf" maxlength="11" required placeholder="Digite o CPF do Cliente">
                <div id="cpf-msg"></div><br>

                <label>RG: </label>
                <input type="text" id="rg" name="rg" maxlength="10" required placeholder="Digite o RG do Cliente">
                <div id="rg-msg"></div><br>

                <input type="submit" value="INCLUIR">
            </form>
        </div>

        <!-- Scripts para verificação em tempo real -->
        <script>
            $(document).ready(function() {
                // Função para verificar se o nome já existe
                $('#nome').on('input', function() {
                    var nome = $(this).val();
                    if (nome.length >= 3) {
                        $.ajax({
                            url: 'verifica_duplicidade_cliente.php',
                            method: 'POST',
                            data: { nome: nome },
                            success: function(data) {
                                $('#nome-msg').html(data);
                            }
                        });
                    } else {
                        $('#nome-msg').html('');
                    }
                });

                // Função para verificar se o CPF já existe
                $('#cpf').on('input', function() {
                    var cpf = $(this).val();
                    if (cpf.length >= 11) {
                        $.ajax({
                            url: 'verifica_duplicidade_cliente.php',
                            method: 'POST',
                            data: { cpf: cpf },
                            success: function(data) {
                                $('#cpf-msg').html(data);
                            }
                        });
                    } else {
                        $('#cpf-msg').html('');
                    }
                });

                // Função para verificar se o RG já existe
                $('#rg').on('input', function() {
                    var rg = $(this).val();
                    if (rg.length >= 9) {
                        $.ajax({
                            url: 'verifica_duplicidade_cliente.php',
                            method: 'POST',
                            data: { rg: rg },
                            success: function(data) {
                                $('#rg-msg').html(data);
                            }
                        });
                    } else {
                        $('#rg-msg').html('');
                    }
                });
            });
        </script>

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