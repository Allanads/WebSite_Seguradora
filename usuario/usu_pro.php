
<?php
session_start();
include_once("../conexao.php");

//$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);



$result_usuario = "INSERT INTO e0_usuario(nome,email,senha) VALUES ('$nome', '$email', '$senha')";
$resultado_usuario = mysqli_query($conn, $result_usuario);


if($conn->affected_rows == 1){
	$_SESSION['msg'] = "<h2><p style='color:green;'>Usuário cadastrado com sucesso!</p></h2>";
}else{
	$_SESSION['msg'] = "<h2><p style='color:red;'>Usuário não foi cadastrado!!!</p></h2>";
}
header("Location: usu_cad.php");

