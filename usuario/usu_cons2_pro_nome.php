<?php
session_start();
include_once("../conexao.php");
?>
<!DOCTYPE html>
<html>
<META charset="utf-8">
<head>
	<title>SEGURADORA</title>
	<link rel="stylesheet" href="css/estilos.css">
	<link href="formata.css" rel="stylesheet">
</head>
<body background="img/fundo.png">
	
<center>
<header class="cabecalho">
	<h1 class="titulo" align="center">SEGURADORA</h1>
	<br>
	<h2 class="titulo" align="center">ACIDENTES NÃO ACONTECEM POR ACASO, MAS POR DESCASO!!!!</h2>
	<br>
	<h2 class="titulo" align="center">CONSULTA DE USUARIO POR NOME</h2>

</header>

<body>
<div style="text-align: left;">
<hr>
<?php
$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
$result_usuario = "SELECT nome FROM e0_usuario WHERE nome=$nome";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if ($row_usuario = mysqli_fetch_assoc($resultado_usuario)) {
	echo"<strong>id:</strong>".$row_usuario['id']."<br>";
	echo"<strong>Nome</strong>:".$row_usuario['nome']."<br>";
	echo"<strong>email</strong>:".$row_usuario['email']."<br>";
	echo"<strong>senha</strong>:".$row_usuario['senha']."<br>";
}else{
		echo "Usuário não existe!!!!";
}
?>
</div>
<a href="usuario.html"> <img src="img/retornar.png" width="30" height="30">  </a>

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
<p style='color:#808080'>&copy; Copyright  <script>var year=new Date();document.writeln(+year.getUTCFullYear());</script> HTML.am - Jesiel Araujo Pedroza </p>
</footer>

</center>

</body>
</html>