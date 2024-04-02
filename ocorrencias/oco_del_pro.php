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
	<h2 class="titulo" align="center">EXCLUSÃO DE OCORRÊNCIAS</h2>

</header>

	<hr>
	<br>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
$nr_ocor = filter_input(INPUT_POST, 'nr_ocor',FILTER_SANITIZE_NUMBER_INT);
$result_ocorrencia = "DELETE FROM e3_ocorrencias WHERE nr_ocor=$nr_ocor";
$resultado_ocorrencia = mysqli_query($conn,$result_ocorrencia);
if (mysqli_affected_rows($conn)) 
{
 echo "<h2><p style='color:green;'>Ocorrência apagada com sucesso!!!!!</p></h2>";
}
else
{
 echo "<h2><p style='color:red;'>Ocorrência não existe!!!!!</p></h2>";
}
?>
<br><hr>
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