<?php
session_start();
include_once("../conexao.php")
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
	<h2 class="titulo" align="center">CONSULTA DE CLIENTES</h2>

</header>
<hr>
<br>

<div class="form-container">
	<form method="POST" action="cli_cons2_pro.php">
		<label> CÓDIGO: </label>
		<input type="number"  required name="cod" placeholder="Digite o código do cliente">
		<input type="submit" name="Consultar">
	</form>
	<br>
	<br>
	<br>
	

 </div>
 <div class="form-container">
	<form method="POST" action="cli_consx.php">
		<label> Pesquisa todos registros: </label>
		<input type="submit" name="Consultar">

	</form>
 </div>

<br>
<br>
<hr>
	 
<a href="cliente.html"> <img src="../img/retornar.png" width="20" height="20">  </a>

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