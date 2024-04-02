<?php
session_start();
include_once("../conexao.php");
?>


<!DOCTYPE html>
<html lang="pt-br" >
<head>
<meta charset="utf-8" />
<title>Atualizar Dados</title>
<link href="../css/formata.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body background="../img/fundo.png">
<center>
		<header class="cabecalho">
		<h1 class="titulo">Atualização de Ocorrências</h1>
		</header>
<hr>
<br>
	<?php
		$nr_ocor=$_POST['nr_ocor'];
		$data=$_POST['data'];
		$local=$_POST['local'];
		$descr=$_POST['descr'];
		

		$result_ocorrencia = "UPDATE e3_ocorrencias SET nr_ocor='$nr_ocor',data='$data',local='$local',descr='$descr' WHERE nr_ocor='$nr_ocor'";
		$resultado_ocorrencia = mysqli_query($conn, $result_ocorrencia);
		echo "<h3><font color='green'>Atualizada com sucesso!</font></h3>";

	?>
	<br>
	<center>
<form method="post" name="consultar_ocorrencia" action="oco_alt_cons.php">
	<label>Fazer nova alteração ? </label>
	<input type="submit" name="voltar" value="Voltar"> 
</form>
<hr>

<a href="ocorrencias.html"> <img src="../img/retornar.png" width="30" height="30">  </a>
</center>
</body>
</html>