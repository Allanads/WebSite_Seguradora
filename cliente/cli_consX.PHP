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
	<h2 class="titulo" align="center">LISTA DE CLIENTES CADASTRADOS</h2>
</header>
		<hr>
		<br>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}

		$result_cliente="SELECT cod,nome,cpf,rg,tel from e1_cliente";
		$resultado_cliente = mysqli_query($conn,$result_cliente);

	while($row_cliente = mysqli_fetch_assoc($resultado_cliente)){
	echo "<strong>Código:</strong> ".$row_cliente['cod']."<br>";
	echo "<strong>Nome:</strong> ".$row_cliente['nome']."<br>";
	echo "<strong>CPF:</strong> ".$row_cliente['cpf']."<br>";
	echo "<strong>RG:</strong> ".$row_cliente['rg']."<br>";
	echo "<strong>Telefone:</strong> ".$row_cliente['tel']."<br><br>";
    echo "<hr><br>";
	}
?>
<CENTER>
	<a href="cliente.html"> <img src="../img/retornar.png" width="30" height="30">  </a></CENTER>

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