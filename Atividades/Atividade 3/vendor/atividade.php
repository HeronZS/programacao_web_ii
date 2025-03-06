<?php
require __DIR__ . 'Atividades\Atividade 3\vendor\autoload.php';


use Mpdf\Mpdf;

try {
    $mpdf = new Mpdf();

    // Conteúdo do PDF
    $html = '<h1>Meu Primeiro PDF com mPDF</h1><p>Gerado com sucesso!</p>';

    // Escrever o HTML no PDF
    $mpdf->WriteHTML($html);

    // Exibir o PDF no navegador
    $mpdf->Output();
} catch (\Mpdf\MpdfException $e) {
    echo "Erro ao gerar PDF: " . $e->getMessage();
}
