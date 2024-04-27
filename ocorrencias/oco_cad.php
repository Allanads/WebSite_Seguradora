<!DOCTYPE HTML>
<html lang="pt">

<head>
    <title>WebSite Seguradora ATK</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <style>
        /* Estilo para corrigir a cor do texto selecionado dentro do input */
        input[type="date"]::-webkit-datetime-edit-text {
            color: black;
        }
        
        /* Estilo para corrigir o fundo do input */
        input[type="date"]::-webkit-calendar-picker-indicator {
            background-color: white;
        }
    </style>
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
                    <h1>Inclusão das ocorrências</h1>
                </div>
            </div>
            <br>
        </header>

        <?php 
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>

        <div class="form-container-oco">
            <form method="POST" action="oco_pro.php">

                <label>Nome do cliente: </label>
                <input type="text" name="placa" maxlength="8" required placeholder="Digite o seu placa"><br>

                <label>Placa do veículo: </label>
                <input type="text" name="placa" maxlength="8" required placeholder="Digite o seu placa"><br>

                <label>Data do ocorrido: </label>
                <input type="date" name="data" required placeholder="Digite a data da ocorrência" value="<?php echo date('Y-m-d'); ?>"><br><br>

                <label>local do ocorrido: </label>
                <input type="text" name="local" required maxlength="50" placeholder="Digite o local da ocorrencia"><br>

                <label>Descrição do ocorrido: </label>
                <input type="text" name="descr" required maxlength="100" placeholder="Digite a descrição da ocorrencia"><br>
                <center>
                    <input type="submit" value="INCLUIR">
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
