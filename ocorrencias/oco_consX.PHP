<?php
session_start();
include_once("../conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CONSULTA DE OCORRÊNCIA</title>
		<link href="../css/formata.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">		
	</head>
	<body background="../img/fundo.png">
		<header class="cabecalho">
		<CENTER><H1 class ="titulo"> LISTA DE OCORRÊNCIAS CADASTRADOS NA SEGURADORA </H1></CENTER>
		</header>
		<hr>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}

		$result_ocorrencia="SELECT nr_ocor,data,local,descr from e3_ocorrencias";
		$resultado_ocorrencia= mysqli_query($conn,$result_ocorrencia);

	while($row_ocorrencia = mysqli_fetch_assoc($resultado_ocorrencia)){
	echo "Número da Ocorrência------: ".$row_ocorrencia['nr_ocor']."<br>";
	echo "Data---------------------: ".$row_ocorrencia['data']."<br>";
	echo "Local---------------------: ".$row_ocorrencia['local']."<br>";
	echo "descr---------------------: ".$row_ocorrencia['descr']."<br>";
    echo "--------------------------<br>";
}
?>
	</body>
<HR>
<CENTER>
	<a href="ocorrencias.html"> <img src="../img/retornar.png" width="20" height="20">  </a></CENTER>
</html>