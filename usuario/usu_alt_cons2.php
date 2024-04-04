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
	<h2 class="titulo" align="center">ALTERAR DADOS DO USUÁRIO</h2>

</header>
	<hr>
	<br>

<?php
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
$result_usuario = "SELECT id, nome, email, senha FROM e0_usuario WHERE email='" . mysqli_real_escape_string($conn, $email) . "'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<form method="POST" name="alterar_usuario" action="usu_alt_atualiza.php">
<?php
if ($row_usuario) {

			
	        echo "<h1><font color='green'>Consta na nossa base de dados o usuário</font></h1><BR>";

			echo "Para realizar a alteração preencha os campos abaixo:<br><br>";
						
			echo "<label><strong>Nome:</strong></label>
			<input name='nome' id='nome' type='text' placeholder=' ".$row_usuario['nome']."'><br></br>";
			
			echo "<label><strong>E-mail:</strong></label>
					<input name='email' id='email' type='email' placeholder=' ".$row_usuario['email']."'><br></br>";

			echo "<label><strong>Senha:</strong></label>
					<input name='senha' id'senha' type='text' placeholder=' ".$row_usuario['senha']."'><br></br>";

			echo "<input type='submit' name='Atualiza' value='Atualiza'> ";

}else{
			echo "<h2><font color='red'>usuario não existe!!!!!</font></h2>";
}
?>
</form>
<br><hr>
	
<a href="usuario.html"> <img src="../img/retornar.png" width="30" height="30">  </a>

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