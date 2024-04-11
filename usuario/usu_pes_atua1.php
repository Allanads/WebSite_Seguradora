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
            <li><a href="usu_cad.php">Cadastrar</a></li>
            <li><a href="usu_pes_usu1.php">Pesquisar</a></li>
            <li><a href="usu_pes_atua1.php">Atualizar</a></li>
            <li><a href="usu_pes_exclui1.php">Excluir</a></li>
            <li><a href="../login.php">Login</a></li>
        </ul>
    </nav>
        <!-- Content -->

        <section id="post" class="wrapper bg-img" data-bg="banner4.jpg">
            <div class="inner">
                <article class="box">
                    <header>
                        <center>
                            <h2>ALTERAR DADOS DE USUÁRIO</h2>

							<img src="images/dados3.png" alt="imagem de centro" width="270" height="270" title="Pesquisar"> <br>

                            <div class="form-container">
                                <form method="post" name="consultar_usuario"
                                    action="usu_alt_cons2.php">
                                    <label><strong>E-mail:</strong></label>
                                    <input type="email" name="email"
                                        maxlength="140" required
                                        placeholder="Digite seu E-mail">
										<br>
                                        <input type="submit" name="enviar" value="Consultar" style="background-color: #03ad61; color: white;">
                                </form>
                                <a href="usuario.html"><button>Voltar</button></a>
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