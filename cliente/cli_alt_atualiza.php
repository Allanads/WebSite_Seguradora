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
	<h2 class="titulo" align="center">ALTERAR DADOS DE CLIENTES</h2>

</header>
	<hr>
	<br>
	<?php
		$cod=$_POST['cod'];
		$nome=$_POST['nome'];
		$rg=$_POST['rg'];
		$cpf=$_POST['cpf'];
		$tel=$_POST['tel'];

		$result_cliente = "UPDATE e1_cliente SET cod='$cod',nome='$nome',rg='$rg',cpf='$cpf',tel='$tel' WHERE cod='$cod'";
		$resultado_cliente = mysqli_query($conn, $result_cliente);
		echo "<h2><font color='green'>Atualizado com sucesso!</font></h2>";

	?>
	<br>
	<center>
<form method="post" name="consultar_cliente" action="cli_alt_cons.php">
	<label>Fazer nova alteração ? </label>
	<input type="submit" name="voltar" value="Voltar"> 
</form>
<hr>

<a href="cliente.html"> <img src="../img/retornar.png" width="30" height="30">  </a>

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