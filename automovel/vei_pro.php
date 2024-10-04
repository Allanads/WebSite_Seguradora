<?php
session_start();
include_once("../conexao.php");

$placa = filter_input(INPUT_POST, 'placa', FILTER_SANITIZE_STRING);
$renavan = filter_input(INPUT_POST, 'renavan', FILTER_SANITIZE_STRING);
$fabricante = filter_input(INPUT_POST, 'fabricante', FILTER_SANITIZE_STRING);
$modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);
$ano = filter_input(INPUT_POST, 'ano', FILTER_SANITIZE_NUMBER_INT);

// Verifica se a placa já existe
$query_placa = "SELECT cod FROM e2_veiculos WHERE placa = '$placa'";
$result_placa = mysqli_query($conn, $query_placa);

if(mysqli_num_rows($result_placa) > 0){
    $_SESSION['msg'] = "<h2><p style='color:yellow;'>Placa já cadastrada!</p></h2>";
    header("Location: vei_cad.php");
    exit();
}

// Verifica se o renavam já existe
$query_renavan = "SELECT cod FROM e2_veiculos WHERE renavan = '$renavan'";
$result_renavan = mysqli_query($conn, $query_renavan);

if(mysqli_num_rows($result_renavan) > 0){
    $_SESSION['msg'] = "<h2><p style='color:yellow;'>Renavan já cadastrado!</p></h2>";
    header("Location: vei_cad.php");
    exit();
}

// Se a placa e o renavan não estão cadastrados, insere o veículo
$result_veiculo = "INSERT INTO e2_veiculos (placa, renavan, fabricante, modelo, ano) VALUES ('$placa', '$renavan', '$fabricante', '$modelo', '$ano')";
$resultado_veiculo = mysqli_query($conn, $result_veiculo);

if($resultado_veiculo){
    $_SESSION['msg'] = "<h2><p style='color:green;'>Veículo cadastrado com sucesso!</p></h2>";
} else {
    $_SESSION['msg'] = "<h2><p style='color:red;'>Erro ao cadastrar o veículo: " . mysqli_error($conn) . "</p></h2>";
}

header("Location: vei_cad.php");
?>
