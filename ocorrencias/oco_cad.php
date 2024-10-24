<?php
session_start();
include_once("../conexao.php");

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos necessários foram preenchidos
    if (isset($_POST['nome_cliente']) && isset($_POST['placa']) && isset($_POST['data']) && isset($_POST['local']) && isset($_POST['descr'])) {
        // Obtém os dados do formulário
        $nome_cliente = $_POST['nome_cliente'];
        $placa = $_POST['placa'];
        $data_ocorrido = $_POST['data'];
        $local_ocorrido = $_POST['local'];
        $descricao_ocorrido = $_POST['descr'];

        // Consulta SQL para obter o ID do cliente usando o nome do cliente
        $sql_cliente = "SELECT COD FROM e1_cliente WHERE NOME = '$nome_cliente'";
        $result_cliente = $conn->query($sql_cliente);

        // Consulta SQL para obter o ID do veículo usando a placa
        $sql_veiculo = "SELECT COD FROM e2_veiculos WHERE PLACA = '$placa'";
        $result_veiculo = $conn->query($sql_veiculo);

        // Verifica se as consultas retornaram resultados
        if ($result_cliente->num_rows > 0 && $result_veiculo->num_rows > 0) {
            // Extrai o ID do cliente e do veículo dos resultados das consultas
            $row_cliente = $result_cliente->fetch_assoc();
            $cod_cliente = $row_cliente['COD'];

            $row_veiculo = $result_veiculo->fetch_assoc();
            $cod_veiculo = $row_veiculo['COD'];

            // Insere a ocorrência no banco de dados
            $sql_inserir_ocorrencia = "INSERT INTO e3_ocorrencias (COD_CLIENTE, COD_VEICULO, DATA_OCORRENCIA, LOCAL_OCORRENCIA, DESCRICAO_OCORRENCIA) VALUES ('$cod_cliente', '$cod_veiculo', '$data_ocorrido', '$local_ocorrido', '$descricao_ocorrido')";
            if ($conn->query($sql_inserir_ocorrencia) === TRUE) {
                $last_id = $conn->insert_id; // Obtém o último ID inserido
                $_SESSION['msg'] = "<h2><span style='color:green; font-weight:bold;'>Ocorrência incluída com sucesso!</span></h2><p><strong>Código da ocorrência:</strong> $last_id</p>";
            } else {
                $_SESSION['msg'] = "<span style='color:red; font-weight:bold;'>Erro ao incluir ocorrência: " . $conn->error . "</span>";
            }
        } else {
            $_SESSION['msg'] = "<span style='color:red; font-weight:bold;'>Erro: Cliente ou veículo não encontrado.</span>";
        }

        // Redireciona após o processamento (evita reenvio do formulário)
        header("Location: " . $_SERVER["PHP_SELF"]);
        exit();
    } else {
        $_SESSION['msg'] = "<span style='color:red; font-weight:bold;'>Erro: Todos os campos devem ser preenchidos.</span>";
    }
}
?>

<!DOCTYPE HTML>
<html lang="pt">

<head>
    <title>WebSite Seguradora ATK</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <style>
        input[type="date"] {
            color: black;
        }

        input[type="date"]::-webkit-datetime-edit {
            color: black;
        }

        input[type="date"]::-webkit-calendar-picker-indicator {
            color: black;
            background: transparent;
        }

        input[type="date"]:-moz-datetime-edit {
            color: black;
        }
    </style>
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Botões no topo da página -->
        <div id="top-buttons">
            <button onclick="window.location.href='../home.html'">Tela Inicial</button>
            <button onclick="window.location.href='ocorrencias.html'">Voltar</button>
            <button onclick="window.location.href='../index.html'">Sair</button>
        </div>
        <br>
        <!-- Header -->
        <header id="header">
            <div class="logo">
                <span class="icon"><i class="fas fa-newspaper"></i><i class="fas fa-pencil-alt"></i></span>
            </div>
            <div class="content">
                <div class="inner">
                    <h1>Inclusão das ocorrências</h1>
                </div>
            </div>
            <br>
        </header>

        <?php 
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>

        <div class="form-container-oco">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                <label>Nome do cliente: </label>
                <input type="text" name="nome_cliente" maxlength="100" required placeholder="Digite o nome do cliente"><br>

                <label>Placa do veículo: </label>
                <input type="text" name="placa" maxlength="8" required placeholder="Digite a placa do veículo"><br>

                <label>Data do ocorrido: </label>
                <input type="date" name="data" required placeholder="Digite a data da ocorrência"><br><br>

                <label>Local do ocorrido: </label>
                <input type="text" name="local" required maxlength="50" placeholder="Digite o local da ocorrência"><br>

                <label>Descrição do ocorrido: </label>
                <input type="text" name="descr" required maxlength="100" placeholder="Digite a descrição da ocorrência"><br>
                <center>
                    <input type="submit" value="INCLUIR">
                </center>
            </form>
        </div>

        <!-- Footer -->
        <footer id="footer">
            <p class="copyright"> WebSite By Company ATK</p>
        </footer>

    </div>

    <!-- BG -->
    <div id="bg"></div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
