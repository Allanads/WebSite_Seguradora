<!DOCTYPE html>
<html>
<META charset="utf-8">
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
    <h2 class="titulo" align="center">INCLUSÃO DE CLIENTE</h2>

</header>
</h1>
<hr>
<br>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>


<?php 
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>

<script>
    // Máscara para o campo de telefone
    $(document).ready(function(){
        $('.telefone').mask('(00) 00000-0000');
    });
</script>


<div class="form-container-cli">
    <form method="POST" action="cli_pro.php">

        <label>Código: </label>
        <input type="number" name="cod" maxlength="3" required autofocus placeholder="Digite o código do veiculo"><br><br>
        
        <label>Nome: </label>
        <input type="text" name="nome" maxlength="30" required placeholder="Digite o Nome do Cliente"><br><br>

        <label>CPF: </label>
        <input type="text" name="cpf" maxlength="11" required placeholder="Digite o CPF do Cliente"><br><br>

        <label>RG: </label>
        <input type="text" name="rg" maxlength="10" required placeholder="Digite o RG do Cliente"><br><br>
		<!--
        <label>Telefone: </label>
        <input type="text" name="tel" required placeholder="Digite o Telefone do Cliente" class="telefone"><br><br>-->

        <input type="submit" value="INCLUIR">
    </form>
</div>
<br>

<br><br><hr>
     
<a href="cliente.html"> <img src="../img/retornar.png" width="30" height="30">  </a>
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
<p style='color:#808080'>&copy; Copyright  <script>var year=new Date();document.writeln(+year.getUTCFullYear());</script></p>
</footer>

</center>

</body>
</html>

