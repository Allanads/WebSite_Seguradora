<?php
session_start();
include_once("../conexao.php");

// Inclua o arquivo TCPDF
require_once('tcpdf/tcpdf.php');

// Função para gerar o PDF
function generatePDF() {
    // Cria uma nova instância do TCPDF
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // Define o cabeçalho e o rodapé
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('WebSite Seguradora ATK');
    $pdf->SetTitle('Ocorrências');
    $pdf->SetSubject('Ocorrências');
    $pdf->SetKeywords('TCPDF, PDF, ocorrências');

    // Adiciona uma página
    $pdf->AddPage();

    // Consulta SQL para obter todas as ocorrências
    global $conn;
    $sql_ocorrencia = "SELECT o.COD AS cod_ocorrencia, o.DATA_OCORRENCIA, o.LOCAL_OCORRENCIA, o.DESCRICAO_OCORRENCIA, v.cod AS cod_veiculo, v.placa, v.renavan, v.fabricante AS fabricante_veiculo, v.modelo AS modelo_veiculo, v.ano AS ano_veiculo, c.cod AS cod_cliente, c.nome, c.cpf, c.rg
                            FROM e3_ocorrencias o
                            INNER JOIN e2_veiculos v ON o.COD_VEICULO = v.COD
                            INNER JOIN e1_cliente c ON o.COD_CLIENTE = c.COD";
    $resultado_ocorrencia = mysqli_query($conn, $sql_ocorrencia);

    // Verifica se a consulta retornou algum resultado
    if ($resultado_ocorrencia && mysqli_num_rows($resultado_ocorrencia) > 0) {
        // Loop através de todas as ocorrências encontradas
        while ($row_ocorrencia = mysqli_fetch_assoc($resultado_ocorrencia)) {
            // Monta o conteúdo do PDF com as informações das ocorrências
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

            // Adiciona uma nova página se houver mais ocorrências
            if (mysqli_num_rows($resultado_ocorrencia) > 1) {
                $pdf->AddPage();
            }
        }
    }

    // Saída do PDF
    $pdf->Output('ocorrencias.pdf', 'I');
}

// Chama a função para gerar o PDF
generatePDF();
?>
