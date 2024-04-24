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
                    <h1>Inclusão de clientes</h1>
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
            
            <script>
                // Máscara para o campo de telefone
                $(document).ready(function(){
                    $('.telefone').mask('(00) 00000-0000');
                });
            </script>
            
            
            <div class="form-container-cli">
                <form method="POST" action="cli_pro.php">
            
                    <label>Nome: </label>
                    <input type="text" name="nome" maxlength="30" required placeholder="Digite o Nome do Cliente"><br>
            
                    <label>CPF: </label>
                    <input type="text" name="cpf" maxlength="11" required placeholder="Digite o CPF do Cliente"><br>
            
                    <label>RG: </label>
                    <input type="text" name="rg" maxlength="10" required placeholder="Digite o RG do Cliente"><br>
                    <!--
                    <label>Telefone: </label>
                    <input type="text" name="tel" required placeholder="Digite o Telefone do Cliente" class="telefone"><br><br>-->
            
                    <input type="submit" value="INCLUIR">
                </form>
            </div>
                </div>
            </div>
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