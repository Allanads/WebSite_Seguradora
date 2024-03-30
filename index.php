<?php

include('conexao1.php');

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<head>
    <title>SEGURADORA</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="formata.css" rel="stylesheet">
</head>

<center>
    <header class="cabecalho">
        <h1 class="titulo" align="center">SEGURADORA</h1>
        <br>
        <h2 class="titulo" align="center">ACIDENTES NÃO ACONTECEM POR ACASO, MAS POR DESCASO!!!!</h2>
        <br>
        <h2 class="titulo" align="center">ACESSE SUA CONTA</h2>

    </header>

    
    <br>

    <img src="img/img11.png" title="login"> <br>

    <?php

if(isset($_POST['email']) || isset($_POST['senha'])) {

if(strlen($_POST['email']) == 0) {
    echo "Preencha seu e-mail";
} else if(strlen($_POST['senha']) == 0) {
    echo "Preencha sua senha";
} else {

    $email = $conne->real_escape_string($_POST['email']);
    $senha = $conne->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM e0_usuario WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $conne->query($sql_code) or die("Falha na execução do código SQL: " . $conne->error);
    $quantidade = $sql_query->num_rows;

    if($quantidade == 1) {

        $e0_usuario = $sql_query->fetch_assoc();
        
        if(!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['id'] = $e0_usuario['id'];
        $_SESSION['nome'] = $e0_usuario['nome'];
                    
        header("Location: home.php");

    }else {
        echo "Falha ao Logar! E-mail ou senha incorretos";
    }

}
}

?>
    
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
        <a href="home.php"><button style="background: #03ad61; border-radius: 6px; padding: 10px; cursor: pointer; color: #fff; border: none; font-size: 10px;">ENTRAR </button></a>

                    
        </p>
    </form>

    <a href="usuario/usuario.html"><button style="background: #069cc2; border-radius: 6px; padding: 10px; cursor: pointer; color: #fff; border: none; font-size: 10px;">INCLUIR USUÁRIO OU ALTERAR DADOS </button></a>

<br>
<br>


    <br><br>
    <hr>

    

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <footer>
        <p style='color:#808080'>&copy; Copyright
            <script>
                var year = new Date();
                document.writeln(+year.getUTCFullYear());
            </script>
        </p>
    </footer>

</center>
   
</body>
</html>