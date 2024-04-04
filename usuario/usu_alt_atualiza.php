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
	<h2 class="titulo" align="center">ALTERAR DADOS DO USUÁRIO</h2>

</header>
	<hr>
	<br>
	<?php
		
		$nome=$_POST['nome'];
		$email=$_POST['email'];
		$senha=$_POST['senha'];
		//UPDATE e0_usuario SET nome=1234 WHERE email="fabio@teste.com";
		//$result_usuario = "UPDATE e0_usuario SET nome='$nome',email='$email',senha='$senha' WHERE email='$email'";
		$result_usuario = "UPDATE e0_usuario SET nome='garrafa',email='garrafa@teste.com',senha='1234' WHERE email='fabio@teste.com'";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		echo "<h2><font color='green'>Atualizado com sucesso!</font></h2>";

	?>
	<br>
	<center>
<form method="post" name="consultar_usuario" action="usu_alt_cons.php">
	<label>Fazer nova alteração ? </label>
	<input type="submit" name="voltar" value="Voltar">
</form>
<hr>

<a href="usuario.html"> <img src="../img/retornar.png" width="30" height="30">  </a>

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