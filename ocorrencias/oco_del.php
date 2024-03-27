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
	<h2 class="titulo" align="center">PESQUISA PARA EXCLUSÃO DE OCORRÊNCIAS</h2>

</header>
	<hr>
	<br>

		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
?>
 <div class="form-container">
<FORM method="POST" action="oco_del_pro.php">
	<label> Número da Ocorrência: </label>
	<input type="number" name="nr_ocor" required placeholder="Digite o número da ocorrência">
	<input type="submit" name="Consultar">
</FORM>
</div>

 <br><hr>
	 
<a href="ocorrencias.html"> <img src="../img/retornar.png" width="20" height="20">  </a>

</center>
</body>
</html>