<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "seguradora";


$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if($conn->error) {
    die("Falha ao conectar ao banco de dados: " . $conn->error);
}

