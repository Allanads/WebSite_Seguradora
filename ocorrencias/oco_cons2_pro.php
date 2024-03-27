<?php
session_start();
include_once("../conexao.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Consulta de ocorrencia</title>
	<link href="../css/formata.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body background="../img/fundo.png">
	<center>
	<header class="cabecalho">
		<h1 class="titulo">VEICULO<h1>	
	</header><hr>

<?php

$nr_ocor = filter_input(INPUT_POST,'nr_ocor',FILTER_SANITIZE_STRING);
$result_ocorrencia = "SELECT nr_ocor,placa,renavan,fabricante,modelo,ano FROM e3_ocorrencias WHERE nr_ocor=$nr_ocor";
$resultado_ocorrencia = mysqli_query($conn, $result_ocorrencia);

if ($row_ocorrencia = mysqli_fetch_assoc($resultado_ocorrencia)) {
	echo"Nr_Ocor........:".$row_ocorrencia['nr_ocor']."<br>";
	echo"Data........:".$row_ocorrencia['data']."<br>";
	echo"Local........:".$row_ocorrencia['local']."<br>";
	echo"Descr........:".$row_ocorrencia['descr']."<br>";
	

}else{
	echo "Ocorrência não existe!!!!";
}
?>

<a href="ocorrencias.html"><hr>
 <img src="../img/retornar.png" width="20" height="20">  </a>


</body>
</html>

