<?php
session_start();
include_once("../conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);

$result_cliente = "INSERT INTO e1_cliente(nome, cpf, rg) VALUES ('$nome', '$cpf', '$rg')";
$resultado_cliente = mysqli_query($conn, $result_cliente);

if($resultado_cliente){
    $_SESSION['msg'] = "<h2><p style='color:green;'>Cliente cadastrado com sucesso!</p></h2>";
}else{
    $_SESSION['msg'] = "<h2><p style='color:red;'>Cliente não foi cadastrado!!!</p></h2>";
}
header("Location: cli_cad.php");
?>
