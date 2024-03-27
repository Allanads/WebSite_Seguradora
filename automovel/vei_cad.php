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
	<h2 class="titulo" align="center">INCLUSÃO DE VEICULOS</h2>

</header>
</h1>
<hr>
<br>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>



		<?php 
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>

		<div class="form-container-vei">
			<form method="POST" action="vei_pro.php">

				<label>Código: </label>
				<input type="number" name="cod" maxlength="3" required autofocus placeholder="Digite o código do veiculo"><br><br>
				
				<label>Placa: </label>
				<input type="text" name="placa" maxlength="8" required placeholder="Digite o seu placa"><br><br>

				<label>Renavan: </label>
				<input type="text" name="renavan" maxlength="11" required placeholder="Digite o renavan do carro"><br><br>

				<label>Fabricante: </label>
				<input type="text" name="fabricante" maxlength="15" required placeholder="Digite o fabricante do carro"><br><br>

				<label>Modelo: </label>
				<input type="text" name="modelo" maxlength="15" required placeholder="Digite o modelo do carro"><br><br>		

				<label>Ano: </label>
				<input type="number" name="ano" maxlength="3" required placeholder="Digite o Ano do carro"><br><br>	

				<input type="submit" value="INCLUIR">
			</form>
			</div>
 <br>

<br><br><hr>
	 
<a href="automovel.html"> <img src="../img/retornar.png" width="20" height="20">  </a>
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

