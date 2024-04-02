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
	<h2 class="titulo" align="center">INCLUSÃO DE CLIENTES</h2>

</header>
</h1>
<hr>
<br>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>

<script>
jQuery(function($){ 
$("#cpf").mask("999.999.999/99");
$("#tel").mask("(99)9999-9999");
}
)
</script>

		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>

		<div class="form-container">
			<form method="POST" action="cli_pro.php">

				<label>Código: </label>
				<input  type="number" name="cod" maxlength="3" required autofocus placeholder="Digite o código"><br><br>
				
				<label>Nome: </label>
				<input  type="text" name="nome" maxlength="50" required placeholder="Digite seu nome"><br><br>

				<label>RG: </label>
				<input type="text" name="rg" maxlength="10" required placeholder="Digite seu RG"><br><br>

				<label>CPF: </label>
				<input type="text" name="cpf" maxlength="15" required id="cpf" placeholder="999.999.999/99"><br><br>

				<label>Telefone: </label>
				<input type="text" name="tel" id="tel" maxlength="12" required placeholder="(99)99999.9999"><br><br>	
			
				<input type="submit" value="INCLUIR">
			</form>
		</div>
 <br>

<br>
<br>
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