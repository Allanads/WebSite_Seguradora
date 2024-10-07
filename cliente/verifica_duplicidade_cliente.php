<?php
include_once("../conexao.php");

if (isset($_POST['nome'])) {
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $query = "SELECT cod FROM e1_cliente WHERE nome = '$nome'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<span style='color:yellow; font-weight:bold;'>Nome já cadastrado.</span><br>";
    } else {
        echo "<span style='color:white; font-weight:bold;'>Nome disponível.</span><br>";
    }
}

if (isset($_POST['cpf'])) {
    $cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
    $query = "SELECT cod FROM e1_cliente WHERE cpf = '$cpf'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<span style='color:yellow; font-weight:bold;'>CPF já cadastrado.</span><br>";
    } else {
        echo "<span style='color:white; font-weight:bold;'>CPF disponível.</span><br>";
    }
}

if (isset($_POST['rg'])) {
    $rg = mysqli_real_escape_string($conn, $_POST['rg']);
    $query = "SELECT cod FROM e1_cliente WHERE rg = '$rg'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<span style='color:yellow; font-weight:bold;'>RG já cadastrado.</span><br>";
    } else {
        echo "<span style='color:white; font-weight:bold;'>RG disponível.</span><br>";
    }
}
?>
