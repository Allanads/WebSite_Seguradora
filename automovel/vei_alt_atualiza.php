﻿<?php
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
	
<center>
<header class="cabecalho">
	<h1 class="titulo" align="center">SEGURADORA - SENAI PARA TODOS</h1>
	<br>
	<h2 class="titulo" align="center">ACIDENTES NÃO ACONTECEM POR ACASO, MAS POR DESCASO!!!!</h2>
	<br>
	<h2 class="titulo" align="center">ALTERAR DADOS DE VEÍCULOS</h2>

</header>
	<hr>
	<br>
	<?php
		$cod=$_POST['cod'];
		$placa=$_POST['placa'];
		$renavan=$_POST['renavan'];
		$fabricante=$_POST['fabricante'];
		$modelo=$_POST['modelo'];
		$ano=$_POST['ano'];

		$result_veiculo = "UPDATE e2_veiculos SET cod='$cod',placa='$placa',renavan='$renavan',fabricante='$fabricante',modelo='$modelo',ano='$ano' WHERE cod='$cod'";
		$resultado_veiculo = mysqli_query($conn, $result_veiculo);
		echo "<h2><font color='green'>Atualizado com sucesso!</font></h2>";

	?>
	<br>
	<center>
<form method="post" name="consultar_veiculo" action="vei_alt_cons.php">
	<label>Fazer nova alteração ? </label>
	<input type="submit" name="voltar" value="Voltar"> 
</form>
<hr>

<a href="automovel.html"> <img src="../img/retornar.png" width="20" height="20">  </a>
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