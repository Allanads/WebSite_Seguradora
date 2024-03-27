<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "login";

$conne = mysqli_connect($servidor, $usuario, $senha, $dbname);

if($conne->error) {
    die("Falha ao conectar ao banco de dados: " . $conne->error);
}