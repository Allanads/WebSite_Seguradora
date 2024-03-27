
<?php
session_start();
include_once("../conexao.php");

$nr_ocor = filter_input(INPUT_POST, 'nr_ocor', FILTER_SANITIZE_NUMBER_INT);
$data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
$local = filter_input(INPUT_POST, 'local', FILTER_SANITIZE_STRING);
$descr = filter_input(INPUT_POST, 'descr', FILTER_SANITIZE_STRING);


$result_ocorrencia = "INSERT INTO e3_ocorrencias(nr_ocor,data,local,descr) VALUES ('$nr_ocor', '$data', '$local','$descr')";
$resultado = mysqli_query($conn, $result_ocorrencia);


if (mysqli_affected_rows($conn)){
		echo "<html> <head> </head> ";
		echo "<body> <br>  <center>";
		echo "<h2><p style='color:green;'>Oocrrência cadastrado com sucesso</p></h2><hr>";
		echo "<a href='ocorrencias.html'> <img src='../img/retornar.png' width='20' height='20'></a> ";
		echo " </center>";
		echo "</body> </html> ";
	}else{
		echo "<html> <head> </head> ";
		echo "<body> <br><hr>   <center>";
		echo "<h2><p style='color:red;'>Ocorrência não foi cadastrado com sucesso</p><hr></h2>";
		echo "<a href='ocorrencias.html'> <img src='../img/retornar.png' width='20' height='20'></a> ";
		echo " </center>";
		echo "</body> </html> ";
}
?>
