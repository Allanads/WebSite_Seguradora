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
	<h2 class="titulo" align="center">ALTERAR DADOS DE VEÍCULOS</h2>

</header>
	<hr>
	<br>

<?php
$cod = filter_input(INPUT_POST,'cod',FILTER_SANITIZE_STRING);
$result_veiculo = "SELECT cod,placa,renavan,fabricante,modelo,ano FROM e2_veiculos WHERE cod=$cod";
$resultado_veiculo = mysqli_query($conn, $result_veiculo);
$row_veiculo;
?>
<form method="POST" name="alterar_veiculo" action="vei_alt_atualiza.php">
<?php
if ($row_veiculo = mysqli_fetch_assoc($resultado_veiculo)) {

			
	        echo "CONSTA NA NOSSA BASE DE DADOS O VEICULO:<BR>";

			echo "<h1><font color='green'>Para realizar a alteração preencha os campos abaixo:</font></h1><BR>";


			echo "<label>código </label>
					<input name='cod' type='number'  maxlength='3' required autofocus  placeholder=' ".$row_veiculo['cod']."'><br></br>";
			
			echo "<label>Placa </label>
					<input name='placa' type='text'  maxlength='8' required placeholder=' ".$row_veiculo['placa']."'><br></br>";
			
			echo "<label>Renavan </label>
					<input name='renavan' type='text' maxlength='11' required  placeholder=' ".$row_veiculo['renavan']."'><br></br>";

			echo "<label>Fabricante </label>
					<input name='fabricante' type='text'   maxlength='15' required placeholder=' ".$row_veiculo['fabricante']."'><br></br>";
		
			echo "<label>Modelo </label>
					<input name='modelo' type='text'   maxlength='15' required placeholder=' ".$row_veiculo['modelo']."'><br></br>";

			echo "<label>Ano </label>
					<input name='ano' type='number' maxlength='4' required placeholder=' ".$row_veiculo['ano']."'><br></br>";

			echo "<input type='submit' name='Atualiza' value='Atualiza'> ";

}else{
			echo "<h2><font color='red'>Veiculo não existe!!!!!</font></h2>";
}
?>
</form>
<br><hr>
	
<a href="automovel.html"> <img src="../img/retornar.png" width="20" height="20">  </a>

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