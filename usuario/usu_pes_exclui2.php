<?php
session_start();
include_once("../conexao.php");
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
                        
                        <div class="form-container">
                            <?php
                            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
                            $result_usuario = "SELECT id, nome, email, senha FROM e0_usuario WHERE email='" . mysqli_real_escape_string($conn, $email) . "'";
                            $resultado_usuario = mysqli_query($conn, $result_usuario);
                            $row_usuario = mysqli_fetch_assoc($resultado_usuario);
                            ?>
                            <form method="POST" action="usu_alt_exclui.php">

                                <?php
                                if ($row_usuario) {
                                    echo "<h1><font color='green' size='+1'>Consta na nossa base de dados o usuário:</font></h1>";
									
                                    echo "<label><strong>Nome:</strong></label>
                                    <span>" . $row_usuario['nome'] . "</span><br><br>";

                                    echo "<label><strong>E-mail:</strong></label>
                                    <span>" . $row_usuario['email'] . "</span><br><br>";

                                    echo "<label><strong>Senha:</strong></label>
                                    <span>" . $row_usuario['senha'] . "</span><br>";
                                    
                                    // Mostra o botão "Excluir" apenas se o usuário for encontrado
                                    echo "<input type='hidden' name='id_usuario' value='" . $row_usuario['id'] . "'>";
                                    echo "<label>Deseja excluir o usuário ? </label>";
                                    echo "<button type='submit'>EXCLUIR</button>";
                                } else {
                                    echo "<h2><font color='red' size='+2'>Usuário não existe!!!!!</font></h2>";
                                    echo "<br><a href='usu_alt_cons5.php'><button type='button'>Voltar para Pesquisa</button></a>";
                                }
                                ?>
                                <br>
                            </form>

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
