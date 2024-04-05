<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="pt">

<head>
    <title>WebSite SEGURADORA ATK</title>
    <meta charset="utf-8">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- ESTOU DESCONFIADO DESSAS DUAS LINHAS DE CODIGO ABAIXO POR ISSO QUE A PÁGINA AO INCLUIR NÃO NO BD E NEM
     APARECE O CADASTRO -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
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

                        <?php
                        if (isset($_SESSION['msg'])) {
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        }
                        ?>

                        <div class="form-container">
                            <form method="POST" action="usu_pro.php">
                                <label><strong>Nome:</strong></label>
                                <input type="text" name="nome" maxlength="140" required placeholder="Digite seu nome"><br><br>

                                <label><strong>E-mail:</strong></label>
                                <input type="email" name="email" maxlength="320" required placeholder="Digite seu e-mail"><br><br>

                                <label><strong>Senha:</strong></label>
                                <input type="password" name="senha" maxlength="16" required placeholder="******"><br><br>

                                <input type="submit" value="INCLUIR">
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