<?php
session_start();
include_once("../conexao.php");
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
        .error-msg {
            color: red;
            font-size: 27px;
            font-weight: bold;
        }

        .left-align {
            text-align: left;
        }
    </style>
</head>

<body class="is-preload">
    <div id="wrapper">
        <div id="top-buttons">
            <button onclick="window.location.href='../home.html'">Tela Inicial</button>
            <button onclick="window.location.href='ocorrencias.html'">Voltar</button>
            <button onclick="window.location.href='../index.html'">Sair</button>
            <!-- Botão de impressão em PDF -->
            <button onclick="window.open('pdf_generator1.php', '_blank')">Imprimir PDF</button>
        </div>
        <br>
        <header id="header">
            <div class="logo">
                <span class="icon"><i class="fas fa-newspaper"></i><i class="fas fa-pencil-alt"></i></span>
            </div>
            <div class="content">
                <div class="inner">
                    <h1>Alterar ocorrência</h1>
                </div>
            </div>
        </header>
        <br>
        <div class="inner">
            <?php
            // Verifica se o formulário foi enviado
            if (isset($_POST['cod_ocorrencia']) && isset($_POST['update'])) {
                $cod_ocorrencia = filter_input(INPUT_POST, 'cod_ocorrencia', FILTER_SANITIZE_NUMBER_INT);
                $data_ocorrencia = filter_input(INPUT_POST, 'data_ocorrencia', FILTER_SANITIZE_STRING);
                $local_ocorrencia = filter_input(INPUT_POST, 'local_ocorrencia', FILTER_SANITIZE_STRING);
                $descricao_ocorrencia = filter_input(INPUT_POST, 'descricao_ocorrencia', FILTER_SANITIZE_STRING);
                $cod_veiculo = filter_input(INPUT_POST, 'cod_veiculo', FILTER_SANITIZE_NUMBER_INT);
                $cod_cliente = filter_input(INPUT_POST, 'cod_cliente', FILTER_SANITIZE_NUMBER_INT);

                // Atualiza a ocorrência no banco de dados
                $sql_update = "UPDATE e3_ocorrencias SET DATA_OCORRENCIA='$data_ocorrencia', LOCAL_OCORRENCIA='$local_ocorrencia', DESCRICAO_OCORRENCIA='$descricao_ocorrencia', COD_VEICULO=$cod_veiculo, COD_CLIENTE=$cod_cliente WHERE COD=$cod_ocorrencia";
                $resultado_update = mysqli_query($conn, $sql_update);

                if ($resultado_update) {
                    echo "<span style='color:green; font-weight:bold;' class='left-align'>Ocorrência atualizada com sucesso!</span><br><br>";
                } else {
                    echo "<span style='color:red; font-weight:bold;' class='left-align'>Erro ao atualizar a ocorrência!</span><br><br>";
                }
            }

            // Verifica se o parâmetro 'cod' foi enviado via POST
            if (isset($_POST['cod'])) {
                $cod_ocorrencia = filter_input(INPUT_POST, 'cod', FILTER_SANITIZE_NUMBER_INT);

                // Consulta SQL para obter a ocorrência com o código especificado
                $sql_ocorrencia = "SELECT o.COD AS cod_ocorrencia, o.DATA_OCORRENCIA, o.LOCAL_OCORRENCIA, o.DESCRICAO_OCORRENCIA, v.cod AS cod_veiculo, v.placa, v.renavan, v.fabricante AS fabricante_veiculo, v.modelo AS modelo_veiculo, v.ano AS ano_veiculo, c.cod AS cod_cliente, c.nome, c.cpf, c.rg
                                    FROM e3_ocorrencias o
                                    INNER JOIN e2_veiculos v ON o.COD_VEICULO = v.COD
                                    INNER JOIN e1_cliente c ON o.COD_CLIENTE = c.COD
                                    WHERE o.COD = $cod_ocorrencia";
                $resultado_ocorrencia = mysqli_query($conn, $sql_ocorrencia);

                // Verifica se a consulta retornou algum resultado
                if ($resultado_ocorrencia && mysqli_num_rows($resultado_ocorrencia) > 0) {
                    $row_ocorrencia = mysqli_fetch_assoc($resultado_ocorrencia);
            ?>
                    <h2 class='left-align'>Informações da Ocorrência</h2>
					<center>
                    <form method="POST" action="">
                        <input type="hidden" name="cod_ocorrencia" value="<?php echo $row_ocorrencia['cod_ocorrencia']; ?>"><br>
                        <label class='left-align'>Data da Ocorrência:</label>
                        <input type="text" name="data_ocorrencia" value="<?php echo $row_ocorrencia['DATA_OCORRENCIA']; ?>"><br>
                        <label class='left-align'>Local da Ocorrência:</label>
                        <input type="text" name="local_ocorrencia" value="<?php echo $row_ocorrencia['LOCAL_OCORRENCIA']; ?>"><br>
                        <label class='left-align'>Descrição da Ocorrência:</label>
                        <input type="text" name="descricao_ocorrencia" value="<?php echo $row_ocorrencia['DESCRICAO_OCORRENCIA']; ?>"><br>
                        <label class='left-align'>Código do Veículo:</label>
                        <input type="text" name="cod_veiculo" value="<?php echo $row_ocorrencia['cod_veiculo']; ?>"><br>
                        <label class='left-align'>Código do Cliente:</label>
                        <input type="text" name="cod_cliente" value="<?php echo $row_ocorrencia['cod_cliente']; ?>"><br>
                        <input type="submit" name="update" value="Atualizar">
                    </form>
				</center>
                    <br>
                    <h2 class='left-align'>Informações do Veículo</h2>
                    <strong class='left-align'>Placa:</strong> <?php echo $row_ocorrencia['placa']; ?><br>
                    <strong class='left-align'>Renavan:</strong> <?php echo $row_ocorrencia['renavan']; ?><br>
                    <strong class='left-align'>Fabricante:</strong> <?php echo $row_ocorrencia['fabricante_veiculo']; ?><br>
                    <strong class='left-align'>Modelo:</strong> <?php echo $row_ocorrencia['modelo_veiculo']; ?><br>
                    <strong class='left-align'>Ano:</strong> <?php echo $row_ocorrencia['ano_veiculo']; ?><br><br>
                    <h2 class='left-align'>Informações do Cliente</h2>
                    <strong class='left-align'>Nome:</strong> <?php echo $row_ocorrencia['nome']; ?><br>
                    <strong class='left-align'>CPF:</strong> <?php echo $row_ocorrencia['cpf']; ?><br>
                    <strong class='left-align'>RG:</strong> <?php echo $row_ocorrencia['rg']; ?><br><br>
            <?php
                } else {
                    echo "<span style='color:red; font-weight:bold;' class='left-align'>Ocorrência não encontrada!</span>";
                }
            }
            ?>
        </div>
        <button onclick="window.location.href='oco_alt_cons.php'">Nova Consulta</button><br>

        <!-- Footer -->
        <footer id="footer">
            <p class="copyright"> WebSite By Company ATK</p>
        </footer>
    </div>
    <div id="bg"></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
