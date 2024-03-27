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
<body background="img/fundo.png">
	
<center>
<header class="cabecalho">
	<h1 class="titulo" align="center">SEGURADORA</h1>
	<br>
	<h2 class="titulo" align="center">ACIDENTES NÃO ACONTECEM POR ACASO, MAS POR DESCASO!!!!</h2>
	<br>
	<h2 class="titulo" align="center">CONSULTA DE CLIENTES POR NOME</h2>

</header>

<div class="form-container">
	<form method="POST" action="cli_cons2_pro_nome.php">
		<label> NOME: </label>
		<input type="text" name="nome" placeholder="Digite o nome do cliente">
		<input type="submit" name="Consultar">
	</form>
	<br>
 </div>
 
 </div>
 <div class="form-container">
	<form method="POST" action="cli_consx.php">
		<label> Pesquisa todos registros: </label>
		<input type="submit" name="Consultar">

	</form>
 </div>

<br><br><hr>
	 
<a href="cliente.html"> <img src="../img/retornar.png" width="20" height="20">  </a>


</body>
</html>