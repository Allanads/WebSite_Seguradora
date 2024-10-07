<?php
session_start();
include_once("../conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);

// Verifica se a conexão com o banco foi bem-sucedida
if (!$conn) {
    $_SESSION['msg'] = "<h2><p style='color:red;'>Erro de conexão com o banco de dados!</p></h2>";
    header("Location: cli_cad.php");
    exit();
}

// Verifica se o Nome já existe
$query_nome = "SELECT cod FROM e1_cliente WHERE nome = ?";
$stmt_nome = mysqli_prepare($conn, $query_nome);
mysqli_stmt_bind_param($stmt_nome, "s", $nome);
mysqli_stmt_execute($stmt_nome);
$result_nome = mysqli_stmt_get_result($stmt_nome);

if (mysqli_num_rows($result_nome) > 0) {
    $_SESSION['msg'] = "<h2><p style='color:yellow;'>Nome já cadastrado!</p></h2>";
    header("Location: cli_cad.php");
    exit();
}

// Verifica se o CPF já existe
$query_cpf = "SELECT cod FROM e1_cliente WHERE cpf = ?";
$stmt_cpf = mysqli_prepare($conn, $query_cpf);
mysqli_stmt_bind_param($stmt_cpf, "s", $cpf);
mysqli_stmt_execute($stmt_cpf);
$result_cpf = mysqli_stmt_get_result($stmt_cpf);

if (mysqli_num_rows($result_cpf) > 0) {
    $_SESSION['msg'] = "<h2><p style='color:yellow;'>CPF já cadastrado!</p></h2>";
    header("Location: cli_cad.php");
    exit();
}

// Verifica se o RG já existe
$query_rg = "SELECT cod FROM e1_cliente WHERE rg = ?";
$stmt_rg = mysqli_prepare($conn, $query_rg);
mysqli_stmt_bind_param($stmt_rg, "s", $rg);
mysqli_stmt_execute($stmt_rg);
$result_rg = mysqli_stmt_get_result($stmt_rg);

if (mysqli_num_rows($result_rg) > 0) {
    $_SESSION['msg'] = "<h2><p style='color:yellow;'>RG já cadastrado!</p></h2>";
    header("Location: cli_cad.php");
    exit();
}

// Insere o novo cliente
$query_insert = "INSERT INTO e1_cliente (nome, cpf, rg) VALUES (?, ?, ?)";
$stmt_insert = mysqli_prepare($conn, $query_insert);
mysqli_stmt_bind_param($stmt_insert, "sss", $nome, $cpf, $rg);

if (mysqli_stmt_execute($stmt_insert)) {
    $_SESSION['msg'] = "<h2><p style='color:green;'>Cliente cadastrado com sucesso!</p></h2>";
    header("Location: cli_cad.php");
} else {
    $_SESSION['msg'] = "<h2><p style='color:red;'>Erro ao cadastrar o cliente!</p></h2>";
    header("Location: cli_cad.php");
}
?>
