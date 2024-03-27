<?php
session_start();
include_once("../conexao.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Consulta de veiculo</title>
</head>
<body>

<?php
$cod = filter_input(INPUT_POST,'cod',FILTER_SANITIZE_STRING);
$result_veiculo = "SELECT cod FROM e2_veiculos WHERE cod=$cod";
$resultado_veiculo = mysqli_query($conn, $result_veiculo);

if ($row_veiculo = mysqli_fetch_assoc($resultado_veiculo)) {
		echo"cod........:".$row_veiculo['cod']."<br>";
}else{
	echo "Veiculo não existe!!!!";
}
?>

<a href="automovel.html"> <img src="img/retornar.png" width="20" height="20">  </a>


</body>
</html>

