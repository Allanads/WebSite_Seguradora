<?php
include_once("../conexao.php");

if(isset($_POST['placa'])){
    $placa = mysqli_real_escape_string($conn, $_POST['placa']);
    $query = "SELECT cod FROM e2_veiculos WHERE placa = '$placa'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){

        echo "<span style='color:yellow; font-weight:bold;'>Placa já cadastrada.</span><br>";
    } else {
        echo "";
    }
}

if(isset($_POST['renavan'])){
    $renavan = mysqli_real_escape_string($conn, $_POST['renavan']);
    $query = "SELECT cod FROM e2_veiculos WHERE renavan = '$renavan'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        echo "<span style='color:yellow; font-weight:bold;'>Renavan já cadastrado.</span><br>";
    } else {
        echo "";
    }
}
?>
