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
	
<center>
<header class="cabecalho">
	<h1 class="titulo" align="center">SEGURADORA</h1>
	<br>
	<h2 class="titulo" align="center">ACIDENTES NÃO ACONTECEM POR ACASO, MAS POR DESCASO!!!!</h2>
	<br>
	<h2 class="titulo" align="center">CONSULTA DE VEÍCULOS POR CODIGO</h2>

</header>
<div style="text-align: left;">
<hr>

<?php

$cod = filter_input(INPUT_POST,'cod',FILTER_SANITIZE_STRING);
$result_veiculo = "SELECT cod,placa,renavan,fabricante,modelo,ano FROM e2_veiculos WHERE cod=$cod";
$resultado_veiculo = mysqli_query($conn, $result_veiculo);

if ($row_veiculo = mysqli_fetch_assoc($resultado_veiculo)) {
	echo"Cod........:".$row_veiculo['cod']."<br>";
	echo"placa........:".$row_veiculo['placa']."<br>";
	echo"renavan........:".$row_veiculo['renavan']."<br>";
	echo"fabricante........:".$row_veiculo['fabricante']."<br>";
	echo"modelo........:".$row_veiculo['modelo']."<br>";
	echo"ano........:".$row_veiculo['ano']."<br>";

}else{
	echo "veiculo não existe!!!!";
}
?>
<center>
<a href="automovel.html"><hr>
 <img src="../img/retornar.png" width="20" height="20">  </a>

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

