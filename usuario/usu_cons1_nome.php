<?php
session_start();
include_once("../conexao.php")
?>
<!DOCTYPE HTML>
<html lang="pt">

<head>
    <title>WebSite SEGURADORA ATK</title>
    <meta charset="utf-8">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body class="subpage">

    <!-- Header -->

    <header id="header" class="alt">
        <div class="logo"><a href="index.html">WebSite <span>by ATK Company</span></a></div>
        <a href="#menu"><span>Menu</span></a>
    </header>
    <!-- Nav -->
    <nav id="menu">
        <ul class="links">
            <li><a href="../index.html">Home</a></li>
            <br>
            <li><a href="usu_cad.php">Cadastrar</a></li>
            <li><a href="usu_alt_cons.php">Atualizar</a></li>
            <li><a href="../login.php">Login</a></li>
        </ul>
    </nav>
    <!-- Content -->
    <!--
            Note: To show a background image, set the "data-bg" attribute below
            to the full filename of your image. This is used in each section to set
            the background image.
        -->
    <section id="post" class="wrapper bg-img" data-bg="banner4.jpg">
        <div class="inner">
            <article class="box">
                <header>
                    <center>
                        <h2>CADASTRO DE USUÁRIO</h2>

                        <div class="form-container">
                            <form method="POST" action="usu_cons2_pro_nome.php">
                                <label> NOME: </label>
                                <input type="text" name="nome" placeholder="Digite o nome do Usuário">
                                <input type="submit" name="Consultar">
                            </form>
                            <br>
                         </div>
                         
                         </div>
                         <div class="form-container">
                            <form method="POST" action="usu_consx.php">
                                <label> Pesquisa todos registros: </label>
                                <input type="submit" name="Consultar">
                        
                            </form>
                         </div>

                </header>

            </article>
        </div>
    </section>
    <div class="copyright">
        WebSite <a>By Company ATK</a>
    </div>
    <!-- Scripts -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/jquery.scrolly.min.js"></script>
    <script src="../assets/js/jquery.scrollex.min.js"></script>
    <script src="../assets/js/skel.min.js"></script>
    <script src="../assets/js/util.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>