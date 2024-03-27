<?php
session_start();
include_once("../conexao.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Consulta de ocorrencia</title>
</head>
<body>

<?php
$nr_ocor = filter_input(INPUT_POST,'nr_ocor',FILTER_SANITIZE_STRING);
$result_ocorrencia = "SELECT nome FROM e3_ocorrencias WHERE nr_ocor=$nr_ocor";
$resultado_ocorrencia = mysqli_query($conn, $result_ocorrencia);

if ($row_ocorrencia = mysqli_fetch_assoc($resultado_ocorrencia)) {
		echo"Número da Ocorrência........:".$row_ocorrencia['nr_ocor']."<br>";
}else{
	echo "Ocorrência não existe!!!!";
}
?>

<a href="ocorrencias.html"> <img src="img/retornar.png" width="20" height="20">  </a>


</body>
</html>

