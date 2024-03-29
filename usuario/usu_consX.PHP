<?php
session_start();
include_once("../conexao1.php");
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

<div style="text-align: left;">
		<hr>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}

		$result_usuario="SELECT id,nome,email,senha from usuario";
		$resultado_usuario = mysqli_query($conne,$result_usuario);

	while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
	echo "id.....: ".$row_usuario['id']."<br>";
	echo "Nome.......: ".$row_usuario['nome']."<br>";
	echo "email........: ".$row_usuario['email']."<br>";
	echo "senha.........: ".$row_usuario['senha']."<br>";
    echo "<hr><br>";
	}
?>
</div> 
<HR>
<CENTER>
	<a href="homecadastrousuario.php"> <img src="../img/retornar.png" width="20" height="20">  </a></CENTER>

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