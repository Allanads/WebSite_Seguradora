
<?php
session_start();
include_once("../conexao.php");

$cod = filter_input(INPUT_POST, 'cod', FILTER_SANITIZE_NUMBER_INT);
$placa = filter_input(INPUT_POST, 'placa', FILTER_SANITIZE_STRING);
$renavan = filter_input(INPUT_POST, 'renavan', FILTER_SANITIZE_STRING);
$fabricante = filter_input(INPUT_POST, 'fabricante', FILTER_SANITIZE_STRING);
$modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);
$ano = filter_input(INPUT_POST, 'ano', FILTER_SANITIZE_NUMBER_INT);


$result_veiculo = "INSERT INTO e2_veiculos(cod,placa,renavan,fabricante,modelo,ano) VALUES ('$cod', '$placa', '$renavan','$fabricante','$modelo','$ano')";
$resultado_veiculo = mysqli_query($conn, $result_veiculo);

if($conn->affected_rows == 1){
	$_SESSION['msg'] = "<h2><p style='color:green;'>Veículo cadastrado com sucesso.</p></h2>";
}else{
	$_SESSION['msg'] = "<h2><p style='color:red;'>Veículo não foi cadastrado!!!</p></h2>";
}
header("Location: vei_cad.php");


