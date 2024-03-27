<?php
session_start();
include_once("../conexao.php")
?>
<!DOCTYPE html>
<html>
<head>
	<link href="../css/formata.css" rel="stylesheet">
	<title> ** CONSULTA DE OCORRÊNCIAS</title>
</head>
<body>

<center>
 <br><br>
		<h1>Pesquisa ocorrências na seguradora</h1>
<hr>
<br>

<div class="form-container">
	<form method="POST" action="oco_cons2_pro_nome.php">
		<label> Número de Ocorrência: </label>
		<input type="number" name="nr_ocor" placeholder="Digite o número da ocorrência">
		<input type="submit" name="Consultar">
	</form>
	<br>
	

 </div>
 <div class="form-container">
	<form method="POST" action="oco_consx.php">
		<label> Pesquisa todos registros: </label>
		<input type="submit" name="Consultar">

	</form>
 </div>

<br><br><hr>
	 
<a href="ocorrencias.html"> <img src="../img/retornar.png" width="20" height="20">  </a>


</body>
</html>