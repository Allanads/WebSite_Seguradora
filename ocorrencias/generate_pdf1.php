<?php
session_start();
include_once("../conexao.php");

// Verifica se o código da ocorrência foi recebido corretamente
if (isset($_POST['cod'])) {
    try {
        // Obtém o código da ocorrência enviado pelo formulário
        $cod_ocorrencia = filter_input(INPUT_POST, 'cod', FILTER_SANITIZE_NUMBER_INT);

        // Verifica se o código da ocorrência é válido
        if ($cod_ocorrencia !== false && $cod_ocorrencia !== null) {
            // Inclui o arquivo TCPDF
            require_once('tcpdf/tcpdf.php');

            // Função para gerar o PDF
            function generatePDF($cod_ocorrencia) {
                // Cria uma nova instância do TCPDF
                $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

                // Define o cabeçalho e o rodapé
                $pdf->SetCreator(PDF_CREATOR);
                $pdf->SetAuthor('WebSite Seguradora ATK');
                $pdf->SetTitle('Ocorrência ' . $cod_ocorrencia);
                $pdf->SetSubject('Ocorrência ' . $cod_ocorrencia);
                $pdf->SetKeywords('TCPDF, PDF, ocorrência');

                // Adiciona uma página
                $pdf->AddPage();

                // Consulta SQL para obter a ocorrência específica
                global $conn;
                $sql_ocorrencia = "SELECT o.COD AS cod_ocorrencia, o.DATA_OCORRENCIA, o.LOCAL_OCORRENCIA, o.DESCRICAO_OCORRENCIA, v.cod AS cod_veiculo, v.placa, v.renavan, v.fabricante AS fabricante_veiculo, v.modelo AS modelo_veiculo, v.ano AS ano_veiculo, c.cod AS cod_cliente, c.nome, c.cpf, c.rg
                                    FROM e3_ocorrencias o
                                    INNER JOIN e2_veiculos v ON o.COD_VEICULO = v.COD
                                    INNER JOIN e1_cliente c ON o.COD_CLIENTE = c.COD
                                    WHERE o.COD = ?";
                $stmt = mysqli_prepare($conn, $sql_ocorrencia);
                mysqli_stmt_bind_param($stmt, "i", $cod_ocorrencia);
                mysqli_stmt_execute($stmt);
                $resultado_ocorrencia = mysqli_stmt_get_result($stmt);

                // Verifica se a consulta retornou algum resultado
                if ($resultado_ocorrencia && mysqli_num_rows($resultado_ocorrencia) > 0) {
                    $row_ocorrencia = mysqli_fetch_assoc($resultado_ocorrencia);

                    // Monta o conteúdo do PDF com as informações da ocorrência
                    $content = "
                        <h2>Informações da Ocorrência</h2>
                        <strong>Código da Ocorrência:</strong> " . $row_ocorrencia['cod_ocorrencia'] . "<br>
                        <strong>Data da Ocorrência:</strong> " . $row_ocorrencia['DATA_OCORRENCIA'] . "<br>
                        <strong>Local da Ocorrência:</strong> " . $row_ocorrencia['LOCAL_OCORRENCIA'] . "<br>
                        <strong>Descrição da Ocorrência:</strong> " . $row_ocorrencia['DESCRICAO_OCORRENCIA'] . "<br><br>
                        <h3>Informações do Veículo</h3>
                        <strong>Código do Veículo:</strong> " . $row_ocorrencia['cod_veiculo'] . "<br>
                        <strong>Placa:</strong> " . $row_ocorrencia['placa'] . "<br>
                        <strong>Renavan:</strong> " . $row_ocorrencia['renavan'] . "<br>
                        <strong>Fabricante:</strong> " . $row_ocorrencia['fabricante_veiculo'] . "<br>
                        <strong>Modelo:</strong> " . $row_ocorrencia['modelo_veiculo'] . "<br>
                        <strong>Ano:</strong> " . $row_ocorrencia['ano_veiculo'] . "<br><br>
                        <h3>Informações do Cliente</h3>
                        <strong>Código do Cliente:</strong> " . $row_ocorrencia['cod_cliente'] . "<br>
                        <strong>Nome:</strong> " . $row_ocorrencia['nome'] . "<br>
                        <strong>CPF:</strong> " . $row_ocorrencia['cpf'] . "<br>
                        <strong>RG:</strong> " . $row_ocorrencia['rg'] . "<br><br><br>";

                    // Adiciona o conteúdo ao PDF
                    $pdf->writeHTML($content, true, false, true, false, '');

                    // Saída do PDF
                    $pdf->Output('ocorrencia_' . $cod_ocorrencia . '.pdf', 'I');
                } else {
                    throw new Exception("Nenhuma ocorrência encontrada para o código especificado: $cod_ocorrencia");
                }
            }

            // Chama a função para gerar o PDF
            generatePDF($cod_ocorrencia);
        } else {
            throw new Exception("Código da ocorrência não foi recebido corretamente.");
        }
    } catch (Exception $e) {
        echo 'Erro ao gerar PDF: ' . $e->getMessage();
    }
} else {
    echo 'Erro ao gerar PDF: Código da ocorrência não foi recebido corretamente.';
}
?>
