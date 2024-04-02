<?php
session_start();
include_once("../conexao.php");
?>
<!DOCTYPE html>
<html  lang=”pt-br”>
<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>

<head>
	<title>Consulta de ocorrências para Alteração</title>
	<link href="../css/formata.css" rel="stylesheet">
	 <link rel="stylesheet" href="css/estilos.css">	
</head>
<body background="../img/fundo.png">
	<center>
		<header class="cabecalho">
		<h1 class="titulo">Consulta de ocorrências para Alteração</h1>
		</header>
	<hr>
	<br>

<?php
$nr_ocor = filter_input(INPUT_POST,'nr_ocor',FILTER_SANITIZE_STRING);
$result_ocorrencia = "SELECT nr_ocor,placa,local,descr FROM e3_ocorrencias WHERE nr_ocor=$nr_ocor";
$resultado_ocorrencia = mysqli_query($conn, $result_ocorrencia);
$row_ocorrencia;
?>
<form method="POST" name="alterar_ocorrencia" action="oco_alt_atualiza.php">
<?php
if ($row_ocorrencia = mysqli_fetch_assoc($resultado_ocorrencia)) {

			
	        echo "CONSTA NA NOSSA BASE DE DADOS A OCORRÊNCIA:<BR>";

			echo "<h1><font color='green'>Para realizar a alteração preencha os campos abaixo:</font></h1><BR>";


			echo "<label>Número da ocorrência </label>
					<input name='nr_ocor' type='number' placeholder=' ".$row_ocorrencia['nr_ocor']."'><br></br>";
			
			echo "<label>Placa </label>
					<input name='placa' type='text' placeholder=' ".$row_ocorrencia['nome']."'><br></br>";
			
			echo "<label>Local </label>
					<input name='local' type='text' placeholder=' ".$row_ocorrencia['local']."'><br></br>";

			echo "<label>Descrição </label>
					<input name='descr' type='text' placeholder=' ".$row_ocorrencia['cpf']."'><br></br>";
		
			

			echo "<input type='submit' name='Atualiza' value='Atualiza'> ";

}else{
			echo "<h3><font color='red'>Ocorrência não existe!!!!!</font></h3>";
}
?>
</form>
<br><hr>
	
<a href="ocorrencias.html"> <img src="../img/retornar.png" width="30" height="30">  </a>

</center>



</body>
</html>

