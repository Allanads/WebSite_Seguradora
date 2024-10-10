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
            <li><a href="usuario.html">Gerenciamento de usuário</a></li>
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
                        <h2>CADASTRO DE USUÁRIO</h2>

                        <img src="images/incluir.png" alt="imagem de centro" width="170" height="170" title="Pesquisar"> <br>

                        <?php
                        if (isset($_SESSION['msg'])) {
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        }
                        ?>

                        <div class="form-container">
                            <form method="POST" action="usu_cad1.php">
                                <label><strong>Nome:</strong></label>
                                <input type="text" name="nome" maxlength="140" required placeholder="Digite seu nome"><br>

                                <label><strong>E-mail:</strong></label>
                                <input type="email" name="email" maxlength="140" required placeholder="Digite seu e-mail"><br>

                                <label><strong>Senha:</strong></label>
                                <input type="password" name="senha" maxlength="16" required placeholder="******"><br>

                                <input type="submit" name="enviar" value="INCLUIR" style="background-color: #03ad61; color: white;">
                            </form>

                            <!-- Botão de Login -->
                            <a href="../login.php">
                                <button type="button" style="background-color: #03619e; color: white; margin-top: 10px;">LOGIN</button>
                            </a>

                            <!-- Botão de Voltar para usuário.html -->
                            <a href="usuario.html">
                                <button type="button" style="background-color: #808080; color: white; margin-top: 10px;">VOLTAR</button>
                            </a>
                        </div>
                    </center>
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
