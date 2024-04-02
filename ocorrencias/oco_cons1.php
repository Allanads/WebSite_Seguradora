<?php
session_start();
include_once("../conexao.php")
?>
<!DOCTYPE html>
<html>
<head>
	<title> ** CONSULTA DE OCORRÊNCIAS</title>
	<link href="../css/formata.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<center>
		<header class="cabecalho">
		<h1 class="titulo">Pesquisa de ocorrências na seguradora</h1>
		</header>
<hr>
<br>

<div class="form-container">
	<form method="POST" action="oco_cons2_pro.php">
		<label> CÓDIGO: </label>
		<input type="text" name="nr_ocor" placeholder="Digite o número da ocorrência">
		<input type="submit" name="Consultar">
	</form>
	<br><br><br>
	

 </div>
 <div class="form-container">
	<form method="POST" action="oco_consx.php">
		<label> Pesquisa todos registros: </label>
		<input type="submit" name="Consultar">

	</form>
 </div>

<br><br><hr>
	 
<a href="ocorrencias.html"> <img src="../img/retornar.png" width="30" height="30">  </a>


</body>
</html>