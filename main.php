<?php
require 'vendor/autoload.php';


$nome = $_POST['nome'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$email = $_POST['email'] ?? '';
$dataNascimento = $_POST['dataNascimento'] ?? '';
$objetivos = $_POST['objetivos'] ?? '';


$escolaridade = '';
$experiencia = '';


if (isset($_POST['entidade'])) {
    foreach ($_POST['entidade'] as $index => $entidade) {
        $curso = $_POST['curso'][$index] ?? '';
        $nivel = $_POST['escolaridade'][$index] ?? '';
        $dataEscIni = $_POST['dataEscIni'][$index] ?? '';
        $dataEscCon = $_POST['dataEscCon'][$index] ?? '';

        $escolaridade .= "Entidade: $entidade\n";
        $escolaridade .= "Curso: $curso\n";
        $escolaridade .= "Nivel de Escolaridade: $nivel\n";
        $escolaridade .= "Data de Início: $dataEscIni\n";
        $escolaridade .= "Data de Conclusão: $dataEscCon\n\n";
    }
}


if (isset($_POST['empresa'])) {
    foreach ($_POST['empresa'] as $index => $empresa) {
        $cargo = $_POST['cargo'][$index] ?? '';
        $dataExpIni = $_POST['dataExpIni'][$index] ?? '';
        $dataExpCon = $_POST['dataExpCon'][$index] ?? '';

        $experiencia .= "Empresa: $empresa\n";
        $experiencia .= "Cargo: $cargo\n";
        $experiencia .= "Data de Inicio: $dataExpIni\n";
        $experiencia .= "Data de Conclusao: $dataExpCon\n\n";
    }
}


$pdf = new \FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'Curriculo', 0, 1, 'C');

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, "Nome: $nome", 0, 1);
$pdf->Cell(0, 10, "Telefone: $telefone", 0, 1);
$pdf->Cell(0, 10, "Email: $email", 0, 1);
$pdf->Cell(0, 10, "Data de Nascimento: $dataNascimento", 0, 1);
$pdf->Ln(10);

$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 10, 'Objetivos', 0, 1);
$pdf->SetFont('Arial', '', 12);
$pdf->MultiCell(0, 10, $objetivos);
$pdf->Ln(10);

$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 10, 'Escolaridade', 0, 1);
$pdf->SetFont('Arial', '', 12);
$pdf->MultiCell(0, 10, $escolaridade);
$pdf->Ln(10);

$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 10, 'Experiencia', 0, 1);
$pdf->SetFont('Arial', '', 12);
$pdf->MultiCell(0, 10, $experiencia);


$pdfOutput = $pdf->Output('', 'S');
header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="curriculo.pdf"');
header('Content-Length: ' . strlen($pdfOutput));
echo $pdfOutput;
?>
