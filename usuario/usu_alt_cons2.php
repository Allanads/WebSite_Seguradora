<?php
session_start();
include_once("../conexao1.php");
?>
<!DOCTYPE html>
<html>
<META charset="utf-8">
<head>
	<title>SEGURADORA</title>
	<link rel="stylesheet" href="css/estilos.css">
	<link href="formata.css" rel="stylesheet">
</head>
<body background="../img/fundo.png">
	
<center>
<header class="cabecalho">
	<h1 class="titulo" align="center">SEGURADORA</h1>
	<br>
	<h2 class="titulo" align="center">ACIDENTES NÃO ACONTECEM POR ACASO, MAS POR DESCASO!!!!</h2>
	<br>
	<h2 class="titulo" align="center">ALTERAR DADOS DO USUÁRIO</h2>

</header>
	<hr>
	<br>

<?php
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
$result_usuario = "SELECT id,nome,email,senha FROM usuario WHERE email=$email";
$resultado_usuario = mysqli_query($conne, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<form method="POST" name="alterar_usuario" action="usu_alt_atualiza.php">
<?php
if ($row_usuario) {

			
	        echo "CONSTA NA NOSSA BASE DE DADOS O USUÁRIO:<BR>";

			echo "<h1><font color='green'>Para realizar a alteração preencha os campos abaixo:</font></h1><BR>";
						
			echo "<label>Nome......:</label>
					<input name='nome' type='text' placeholder=' ".$row_usuario['nome']."'><br></br>";
			
			echo "<label>E-mail.......:</label>
					<input name='email' type='text' placeholder=' ".$row_usuario['email']."'><br></br>";

			echo "<label>Senha........:</label>
					<input name='senha' type='text' placeholder=' ".$row_usuario['senha']."'><br></br>";

			echo "<input type='submit' name='Atualiza' value='Atualiza'> ";

}else{
			echo "<h2><font color='red'>usuario não existe!!!!!</font></h2>";
}
?>
</form>
<br><hr>
	
<a href="homecadastrousuario.php"> <img src="../img/retornar.png" width="20" height="20">  </a>

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