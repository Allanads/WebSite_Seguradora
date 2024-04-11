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
            <li><a href="usuario.html">Gerenciamento de Usuários</a></li>
            <li><a href="usu_cad.php">Cadastrar</a></li>
            <li><a href="usu_alt_cons.php">Pesquisar</a></li>
            <li><a href="usu_alt_cons4.php">Atualizar</a></li>
            <li><a href="../login.php">Login</a></li>
        </ul>
    </nav>
    </nav>
    <!-- Content -->
   
    <section id="post" class="wrapper bg-img" data-bg="banner4.jpg">
        <div class="inner">
            <article class="box">
                <header>
                    <center>

                        <div class="form-container">
                            
                            

                            <?php
                            
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                // Verifica se o ID do usuário foi enviado
                                if (isset($_POST['id_usuario'])) {
                                    $id_usuario = $_POST['id_usuario'];
                            
                                    // Query para excluir o usuário
                                    $sql = "DELETE FROM e0_usuario WHERE id = '$id_usuario'";
                                    if (mysqli_query($conn, $sql)) {
                                        echo "<h2><strong><font color='green'>Usuário excluído com sucesso.</strong></font></h2>";
                                    } else {
                                        echo "<label><strong>Erro ao excluir o usuário: </label></strong>" . mysqli_error($conn);
                                    }
                                } else {
                                    echo "<label><strong>ID do usuário não foi enviado.</label></strong>";
                                }
                            } else {
                                echo "<label><strong>Acesso inválido.</label></strong>";
                            }
                            ?>
                            <br>
                                <form method="post" name="consultar_usuario" action="../index.html">
                                    
                                    <label>Clique em voltar para tela inicial</label>
                                    <input type="submit" name="voltar" value="Voltar">
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