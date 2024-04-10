<?php
session_start();
include_once("../conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o ID do usuário foi enviado
    if (isset($_POST['id_usuario'])) {
        $id_usuario = $_POST['id_usuario'];

        // Query para excluir o usuário
        $sql = "DELETE FROM e0_usuario WHERE id = '$id_usuario'";
        if (mysqli_query($conn, $sql)) {
            echo "Usuário excluído com sucesso.";
        } else {
            echo "Erro ao excluir o usuário: " . mysqli_error($conn);
        }
    } else {
        echo "ID do usuário não foi enviado.";
    }
} else {
    echo "Acesso inválido.";
}
?>
