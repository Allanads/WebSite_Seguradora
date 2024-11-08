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
        <div class="logo"><a href="index.html">WebSite <span>by ATK Company</span></a></div>
        <a href="#menu"><span>Menu</span></a>
    </header>

    <!-- Nav -->
    <nav id="menu">
        <ul class="links">
            <li><a href="../index.html">Home</a></li>
            <li><a href="usuario.html">Gerenciamento de usuário</a></li>
            <li><a href="usu_cad.php">Cadastrar</a></li>
            <li><a href="usu_pes_usu1.php">Pesquisar</a></li>
            <li><a href="usu_pes_atua1.php">Atualizar</a></li>
            <li><a href="usu_pes_exclui1.php">Excluir</a></li>
            <li><a href="../login.php">Login</a></li>
        </ul>
    </nav>

    <section id="post" class="wrapper bg-img" data-bg="banner4.jpg">
        <div class="inner">
            <article class="box">
                <header>
                    <center>
                        <h2>DADOS DOS USUÁRIOS</h2>
                        <br>
                        <div class="form-container">
                            <?php
                            // Consulta para obter todos os usuários do banco de dados
                            $result_usuario = "SELECT id, nome, email, senha FROM e0_usuario";
                            $resultado_usuario = mysqli_query($conn, $result_usuario);
                            
                            // Exibe os usuários em formato de tabela
                            if (mysqli_num_rows($resultado_usuario) > 0) {
                                echo "<table border='1' style='width:100%; text-align: left;'>";
                                echo "<tr><th>ID</th><th>Nome</th><th>Email</th><th>Senha</th></tr>";

                                while ($row_usuario = mysqli_fetch_assoc($resultado_usuario)) {
                                    echo "<tr>";
                                    echo "<td>" . $row_usuario['id'] . "</td>";
                                    echo "<td>" . $row_usuario['nome'] . "</td>";
                                    echo "<td>" . $row_usuario['email'] . "</td>";
                                    echo "<td>" . $row_usuario['senha'] . "</td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                            } else {
                                echo "<p>Nenhum usuário encontrado.</p>";
                            }
                            ?>
                            <br>
                            <div style="text-align: center; margin-top: 5px;">
                                <a href="usu_pes_usu1.php"><button style="background-color: #808080; color: white;">VOLTAR</button></a>
                            </div>
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
