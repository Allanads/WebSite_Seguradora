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
                </div>
            </div>
        </header>
        <br>

        <?php
        $cod = filter_input(INPUT_POST,'cod',FILTER_SANITIZE_STRING);
        $result_veiculo = "SELECT cod,placa,renavan,fabricante,modelo,ano FROM e2_veiculos WHERE cod=$cod";
        $resultado_veiculo = mysqli_query($conn, $result_veiculo);
        $row_veiculo = mysqli_fetch_assoc($resultado_veiculo);
        ?>
        <form method="POST" name="alterar_veiculo" action="vei_alt_atualiza.php">
        <?php
        if ($row_veiculo) {

                    
            echo "<div style='text-align: center;'>CONSTA NA NOSSA BASE DE DADOS O VEÍCULO<br><br></div>";
            echo "<h4>Para realizar a alteração preencha os campos abaixo:</h4>";


            echo "<label>Código:</label>
                    <input name='cod' type='text' value='" . $row_veiculo['cod'] . "' readonly><br>";
                    
            echo "<label>Placa </label>
                    <input name='placa' type='text'  maxlength='8' value='".$row_veiculo['placa']."'><br>";
                    
            echo "<label>Renavan </label>
                    <input name='renavan' type='text' maxlength='11' value='".$row_veiculo['renavan']."'><br>";

            echo "<label>Fabricante </label>
                    <input name='fabricante' type='text'   maxlength='15' value='".$row_veiculo['fabricante']."'><br>";
                
            echo "<label>Modelo </label>
                    <input name='modelo' type='text'   maxlength='15' value='".$row_veiculo['modelo']."'><br>";

            echo "<label>Ano </label>
                    <input name='ano' type='text' maxlength='4' value='".$row_veiculo['ano']."'><br>";
            
            echo "<input type='submit' name='Atualiza' value='Atualiza'> ";

        } else {
            echo "<h2><font color='red'>Veículo não existe!!!!!</font></h2>";
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
