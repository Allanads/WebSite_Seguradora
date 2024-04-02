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
	<h2 class="titulo" align="center">ALTERAR DADOS DE CLIENTES</h2>

</header>
	<hr>
	<br>

<?php
$cod = filter_input(INPUT_POST,'cod',FILTER_SANITIZE_STRING);
$result_cliente = "SELECT cod,nome,rg,cpf,tel FROM e1_cliente WHERE cod=$cod";
$resultado_cliente = mysqli_query($conn, $result_cliente);
$row_cliente;
?>
<form method="POST" name="alterar_cliente" action="cli_alt_atualiza.php">
<?php
if ($row_cliente = mysqli_fetch_assoc($resultado_cliente)) {

			
	        echo "CONSTA NA NOSSA BASE DE DADOS O CLIENTE:<BR>";

			echo "<h1><font color='green'>Para realizar a alteração preencha os campos abaixo:</font></h1><BR>";


			echo "<label>código....:</label>
					<input name='cod' type='number' placeholder=' ".$row_cliente['cod']."'><br></br>";
			
			echo "<label>Nome......:</label>
					<input name='nome' type='text' placeholder=' ".$row_cliente['nome']."'><br></br>";
			
			echo "<label>CPF.......:</label>
					<input name='cpf' type='number' placeholder=' ".$row_cliente['cpf']."'><br></br>";

			echo "<label>RG........:</label>
					<input name='rg' type='number' placeholder=' ".$row_cliente['rg']."'><br></br>";

			echo "<label>Telefone..:</label>
					<input name='tel' type='number' placeholder=' ".$row_cliente['tel']."'><br></br>";

			echo "<input type='submit' name='Atualiza' value='Atualiza'> ";

}else{
			echo "<h2><font color='red'>Cliente não existe!!!!!</font></h2>";
}
?>
</form>
<br><hr>
	
<a href="cliente.html"> <img src="../img/retornar.png" width="30" height="30">  </a>

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