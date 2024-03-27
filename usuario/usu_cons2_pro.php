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
	<h2 class="titulo" align="center">CONSULTA DE CLIENTES POR CODIGO</h2>

</header>
<div style="text-align: left;">
<hr>
<?php

$cod = filter_input(INPUT_POST,'cod',FILTER_SANITIZE_NUMBER_INT);
$result_cliente = "SELECT cod,nome,cpf,rg,tel FROM e1_cliente WHERE cod=$cod";
$resultado = mysqli_query($conn, $result_cliente);

if ($row_cliente = mysqli_fetch_assoc($resultado)) {
	echo"Código.....:".$row_cliente['cod']."<br>";
	echo"Nome.......:".$row_cliente['nome']."<br>";
	echo"CPF........:".$row_cliente['cpf']."<br>";
	echo"RG.........:".$row_cliente['rg']."<br>";	
	echo"Telefone...:".$row_cliente['tel']."<br>";
}else{
	echo "Cliente não existe!!!!";
}
?>
</div>
<a href="cliente.html"><hr>
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

