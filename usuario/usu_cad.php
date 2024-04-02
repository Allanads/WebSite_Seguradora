<?php
session_start();
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
	<h2 class="titulo" align="center">INCLUSÃO DE USUÁRIOS</h2>

</header>
 
<br>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>


		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>

		<div class="form-container">
			<form method="POST" action="usu_pro.php">
			
				<label>Nome: </label>
				<input type="text" name="nome" maxlength="140" required placeholder="Digite seu nome"><br><br>

				<label>E-mail: </label>
				<input type="text" name="e-mail" maxlength="140" required placeholder="Digite seu e-mail"><br><br>

				<label>Senha: </label>
				<input type="text" name="senha" maxlength="16" required placeholder="******"><br><br>
							
				<input type="submit" value="INCLUIR">
			</form>
		</div>
 <br>

<br>
<br>
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