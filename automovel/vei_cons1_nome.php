<?php
session_start();
include_once("../conexao.php")
?>
<!DOCTYPE html>
<html>
<head>
	<link href="../css/formata.css" rel="stylesheet">
	<title> ** CONSULTA DO VEICULO</title>
</head>
<body>

<center>
 <br><br>
		<h1>Pesquisa de veiculo na seguradora</h1>
<hr>
<br>

<div class="form-container">
	<form method="POST" action="vei_cons2_pro_nome.php">
		<label> Codigo: </label>
		<input type="text" name="cod" placeholder="Digite o codigo do veiculo">
		<input type="submit" name="Consultar">
	</form>
	<br>
	

 </div>
 <div class="form-container">
	<form method="POST" action="vei_consx.php">
		<label> Pesquisa todos registros: </label>
		<input type="submit" name="Consultar">

	</form>
 </div>

<br><br><hr>
	 
<a href="automovel.html"> <img src="../img/retornar.png" width="30" height="30">  </a>


</body>
</html>