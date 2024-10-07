<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="pt">

<head>
    <title>WebSite Seguradora ATK</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Adicionando botões no topo da página -->
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
                    <h1>Inclusão de veículos</h1>
                </div>
            </div>
        </header>
        <br>
        </h1>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
            
        <?php 
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>

        <div class="form-container-vei">
            <form method="POST" action="vei_pro.php">
                                    
                <label>Placa: </label>
                <input type="text" name="placa" id="placa" maxlength="8" required placeholder="Digite a placa do veículo"><br>
                <span id="placa-msg" style="color:red;"></span><br>

                <label>Renavan: </label>
                <input type="text" name="renavan" id="renavan" maxlength="11" required placeholder="Digite o renavam do veículo"><br>
                <span id="renavan-msg" style="color:red;"></span><br>

                <label>Fabricante: </label>
                <input type="text" name="fabricante" maxlength="15" required placeholder="Digite o fabricante do carro"><br>

                <label>Modelo: </label>
                <input type="text" name="modelo" maxlength="15" required placeholder="Digite o modelo do carro"><br>

                <label>Ano: </label>
                <input type="text" name="ano" maxlength="4" required placeholder="Digite o Ano do carro"><br>

                <input type="submit" value="INCLUIR" id="submit-btn">
            </form>
        </div>

        <!-- Footer -->
        <footer id="footer">
            <p class="copyright"> WebSite By Company ATK</p>
        </footer>

    </div>

    <!-- BG -->
    <div id="bg"></div>

    <!-- Scripts -->
    <script>
        $(document).ready(function() {
            // Função para verificar se a placa já existe
            $('#placa').on('input', function() {
                var placa = $(this).val();
                if (placa.length >= 7) {
                    $.ajax({
                        url: 'verifica_duplicidade_veiculo.php',
                        method: 'POST',
                        data: { placa: placa },
                        success: function(data) {
                            $('#placa-msg').html(data);
                        }
                    });
                }
            });

            // Função para verificar se o renavam já existe
            $('#renavan').on('input', function() {
                var renavan = $(this).val();
                if (renavan.length >= 9) {
                    $.ajax({
                        url: 'verifica_duplicidade_veiculo.php',
                        method: 'POST',
                        data: { renavan: renavan },
                        success: function(data) {
                            $('#renavan-msg').html(data);
                        }
                    });
                }
            });
        });
    </script>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
