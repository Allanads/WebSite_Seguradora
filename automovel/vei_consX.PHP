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
	<h2 class="titulo" align="center">LISTA DE VEÍCULOS CADASTRADOS</h2>
</header>
		<hr>
		<br>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		
		$result_veiculo="SELECT cod,placa,renavan,fabricante,modelo,ano from e2_veiculos";
		$resultado_veiculo= mysqli_query($conn,$result_veiculo);
		
	while($row_veiculo = mysqli_fetch_assoc($resultado_veiculo)){
		echo "<strong>Código:</strong> " . $row_veiculo['cod'] . "<br>";
		echo "<strong>Placa:</strong> " . $row_veiculo['placa'] . "<br>";
		echo "<strong>Renavan:</strong> " . $row_veiculo['renavan'] . "<br>";
		echo "<strong>Fabricante:</strong> " . $row_veiculo['fabricante'] . "<br>";
		echo "<strong>Modelo:</strong> " . $row_veiculo['modelo'] . "<br>";
		echo "<strong>Ano:</strong> " . $row_veiculo['ano'] . "<br><br>";
    echo "<hr><br>";
}
?>
	</body>
<CENTER>
	<a href="automovel.html"> <img src="../img/retornar.png" width="30" height="30">  </a></CENTER>

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