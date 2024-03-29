<?php
session_start();
include_once("../conexao1.php")
?>
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
	<h2 class="titulo" align="center">CONSULTA DE USUÁRIO</h2>

</header>
<hr>
<br>

<div class="form-container">
	<form method="POST" action="usu_cons2_pro.php">
		<label> E-MAIL: </label>
		<input type="text"  required name="email" placeholder="Digite o e-mail do usuário">
		<input type="submit" name="Consultar">
	</form>
	<br>
	<br>
	<br>
	

 </div>
 <div class="form-container">
	<form method="POST" action="usu_consx.php">
		<label> Pesquisa todos registros: </label>
		<input type="submit" name="Consultar">

	</form>
 </div>

<br>
<br>
<hr>
	 
<a href="homecadastrousuario.php"> <img src="../img/retornar.png" width="20" height="20">  </a>

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
<p style='color:#808080'>&copy; Copyright  <script>var year=new Date();document.writeln(+year.getUTCFullYear());</script></p>
</footer>

</center>

</body>
</html>