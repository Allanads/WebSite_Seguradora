<?php
include('conexao.php');
?>
<!DOCTYPE HTML>
<html lang="pt">

<head>
    <title>WebSite SEGURADORA ATK</title>
    <meta charset="utf-8">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/main.css">
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
            <li><a href="index.html">Home</a></li>
        </ul>
    </nav>

    <!-- Content -->
    <section id="post" class="wrapper bg-img" data-bg="banner2.jpg">
        <div class="inner">
            <article class="box">
                <header>
                    <center>
                        <h2>FAÇA O SEU LOGIN</h2>

                        <br>

                        <?php
                        // Verifica se o formulário foi enviado
                        if (isset($_POST['email']) || isset($_POST['senha'])) {

                            // Verifica se o campo de email e senha estão vazios
                            if (strlen($_POST['email']) == 0 || strlen($_POST['senha']) == 0) {
                                echo "<div style='color: yellow; font-size: 18px; text-align: center;'>Preencha seu e-mail e senha para acessar</div>";
                            } else {
                                $email = $conn->real_escape_string($_POST['email']);
                                $senha = $conn->real_escape_string($_POST['senha']);

                                // Consulta para verificar o usuário no banco de dados
                                $sql_code = "SELECT * FROM e0_usuario WHERE email = '$email' AND senha = '$senha'";
                                $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);
                                $quantidade = $sql_query->num_rows;

                                // Se o login for bem-sucedido
                                if ($quantidade == 1) {

                                    // Obtém os dados do usuário
                                    $e0_usuario = $sql_query->fetch_assoc();

                                    // Armazena os dados do usuário na sessão
                                    session_start();
                                    $_SESSION['user'] = $e0_usuario['id'];
                                    $_SESSION['nome'] = $e0_usuario['nome'];

                                    // Verifica se é o e-mail do administrador para redirecionar
                                    if (strtolower($email) === 'administrador@teste.com') {
                                        header("Location: usuario/usuario.html");
                                        exit();
                                    } else {
                                        header("Location: home.html");
                                        exit();
                                    }

                                } else {
                                    // Mensagem de erro caso o login falhe
                                    echo "<strong><span style='color: red; font-size: 18px;'>Falha ao Logar! E-mail ou senha incorretos</span></strong><br><br>";
                                }
                            }
                        }
                        ?>

                        <br>

                        <form action="" method="POST">
                            <p>
                                <label>E-mail</label>
                                <input type="text" name="email">
                            </p>
                            <p>
                                <label>Senha</label>
                                <input type="password" name="senha">
                            </p>
                            <p>
                                <style>
                                    .botao-verde {
                                        background-color: #03ad61;
                                    }
                                </style>

                                <center><button type="submit" class="botao-verde">ENTRAR</button></center><br>

                                <style>
                                    .botao-azul-claro {
                                        background-color: #03619e;
                                    }
                                </style>
                                <center><button type="button" class="botao-azul-claro" onclick="location.href='usuario/usu_esqueci.php';">ESQUECI MINHA SENHA</button></center>
                            </p>
                        </form>

                </header>
            </article>
        </div>
    </section>

    <div class="copyright">
        WebSite <a>By Company ATK</a>
    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
