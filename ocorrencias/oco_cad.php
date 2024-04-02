<?php
session_start();
//include_once("../validaCPF.php")
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
	<h2 class="titulo" align="center">INCLUSÃO DE OCORRÊNCIAS</h2>

</header>
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

		<div class="form-container">
			<form method="POST" action="oco_pro.php">

				<label>Número da Ocorrência: </label>
				<input  type="number" required name="nr_ocor" placeholder="Digite o número da ocorrência"><br><br>
				
				<label>Data: </label>
				<input  type="date" name="data" required placeholder="Digite a data da ocorrência"><br><br>

				<label>local: </label>
				<input type="text" name="local" required maxlength="50" placeholder="Digite o local da ocorrencia"><br><br>

				<label>descr: </label>
				<input type="text" name="descr" required maxlength="100" placeholder="Digite a descrição da ocorrencia"><br><br>	

				<input type="submit" value="Cadastrar">
			</form>
		</div>
 <br>

<br><br><hr>
	 
<a href="ocorrencias.html"> <img src="../img/retornar.png" width="30" height="30">  </a>

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

