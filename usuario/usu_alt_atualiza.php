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
	<h2 class="titulo" align="center">ALTERAR DADOS DO USUÁRIO</h2>

</header>
	<hr>
	<br>
	<?php
		$id=$_POST['id'];
		$nome=$_POST['nome'];
		$email=$_POST['email'];
		$senha=$_POST['senha'];
		
		$result_usuario = "UPDATE usuarios SET nome='$nome',email='$email',senha='$senha' WHERE email='$email'";
		$resultado_usuario = mysqli_query($conne, $result_usuario);
		echo "<h2><font color='green'>Atualizado com sucesso!</font></h2>";

	?>
	<br>
	<center>
<form method="post" name="consultar_usuario" action="usu_alt_cons.php">
	<label>Fazer nova alteração ? </label>
	<input type="submit" name="voltar" value="Voltar">
</form>
<hr>

<a href="homecadastrousuario.php"> <img src="../img/retornar.png" width="20" height="20">  </a>

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