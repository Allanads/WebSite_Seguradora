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
	<h2 class="titulo" align="center">EXCLUSÃO DE CLIENTES</h2>

</header>
	<hr>
	<br>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}

$cod = filter_input(INPUT_POST, 'cod',FILTER_SANITIZE_NUMBER_INT);
$result_cliente = "DELETE FROM e1_cliente WHERE cod=$cod";
$resultado = mysqli_query($conn,$result_cliente);


if (mysqli_affected_rows($conn)) 
{
 echo "<h2><font color='green'>Cliente apagado com sucesso!!!</font></h2>";
}
else
{
 echo "<h2><font color='red'>Cliente não existe?!</font></h2>";
}


?>

<br><hr>
	 
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