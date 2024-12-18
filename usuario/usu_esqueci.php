<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="pt">

    <head>
        <title>WebSite SEGURADORA ATK</title>
        <meta charset="utf-8">
        <meta name="robots"
            content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../assets/css/main.css">
    </head>

    <body class="subpage">

        <!-- Header -->

        <header id="header" class="alt">
            <div class="logo"><a href="index.html">WebSite <span>by ATK
                        Company</span></a></div>
            <a href="#menu"><span>Menu</span></a>
        </header>
        <!-- Nav -->
        <nav id="menu">
        <ul class="links">
            <li><a href="../index.html">Home</a></li>
            <li><a href="../login.php">Login</a></li>
        </ul>
    </nav>
       
        <section id="post" class="wrapper bg-img" data-bg="banner4.jpg">
            <div class="inner">
                <article class="box">
                    <header>
                        <center>
                            <h2>ESQUECI  MINHA SENHA</h2>

							<img src="images/esqueci.png" alt="imagem de centro" width="150" height="150" title="Pesquisar"> <br>

                            <div class="form-container">
                                <form method="post" name="consultar_usuario"
                                    action="usu_pes_senha.php">
                                    <label><strong>E-mail:</strong></label>
                                    <input type="email" name="email"
                                        maxlength="140" required
                                        placeholder="Digite seu E-mail">
										<br>

                                        <input type="submit" name="Visualizar" value="Consultar" style="background-color: #03ad61; color: white;">
                                
                                </form>
                                <a href="../login.php"><button>Voltar</button></a>
                            </div>
                        </body>

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