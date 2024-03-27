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
<body background="img/fundo.png">
	
<center>
<header class="cabecalho">
	<h1 class="titulo" align="center">SEGURADORA</h1>
	<br>
	<h2 class="titulo" align="center">ACIDENTES NÃO ACONTECEM POR ACASO, MAS POR DESCASO!!!!</h2>
	<br>
	<h2 class="titulo" align="center">LISTA DE VEÍCULOS CADASTRADOS</h2>
</header>
		<hr>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}

		$result_veiculo="SELECT cod,placa,renavan,fabricante,modelo,ano from e2_veiculos";
		$resultado_veiculo= mysqli_query($conn,$result_veiculo);

	while($row_veiculo = mysqli_fetch_assoc($resultado_veiculo)){
	echo "Código----: ".$row_veiculo['cod']."<br>";
	echo "Placa-----: ".$row_veiculo['placa']."<br>";
	echo "renavan---: ".$row_veiculo['renavan']."<br>";
	echo "fabricante: ".$row_veiculo['fabricante']."<br>";
	echo "modelo----: ".$row_veiculo['modelo']."<br>";
	echo "ano-------: ".$row_veiculo['ano']."<br>";
    echo "<hr><br>";
}
?>
	</body>
<HR>
<CENTER>
	<a href="automovel.html"> <img src="../img/retornar.png" width="20" height="20">  </a></CENTER>

<<br>
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