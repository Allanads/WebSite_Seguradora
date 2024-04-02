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
	<h2 class="titulo" align="center">CONSULTA DE CLIENTES POR NOME</h2>

</header>

<body>
<div style="text-align: left;">
<hr>
<?php
$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
$result_cliente = "SELECT nome FROM e1_cliente WHERE nome=$nome";
$resultado_cliente = mysqli_query($conn, $result_cliente);

if ($row_cliente = mysqli_fetch_assoc($resultado_cliente)) {
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
<a href="cliente.html"> <img src="img/retornar.png" width="20" height="20">  </a>

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