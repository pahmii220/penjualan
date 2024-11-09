<?php
$pdf = new FPDF('p', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetFont('Times', 'B', 18);
$pdf->Image('./assets/img/cart.png', 25, 5, 27, 24);
$pdf->Cell(25);
$pdf->SetFont('Times', 'B', 20);
$pdf->Cell(0, 5, 'KOPERASI HARUM MANiS BERSATU', 0, 1, 'C');
$pdf->Cell(25);
$pdf->SetFont('Times', 'B', 10);
$pdf->Cell(0, 5, 'WEBSITE :' . 'WWWW.HARUMBERSATU.COM' . '/ E-MAIL : ' . 'admin@harumbersatu.com', 0, 1, 'C');
$pdf->Cell(25);
$pdf->SetFont('Times', 'B', 10);
$pdf->Cell(0, 5, 'Banjarmasin Utara' . ' telp./ Fax : ' . '081349685149' . ' /' . 'KOPERASI HARUM MANIS BERSASTU', 0, 1, 'C');


$pdf->SetLineWidth(1);
$pdf->Line(10, 36, 197, 36);
$pdf->SetLineWidth(0);
$pdf->Line(10, 37, 197, 37);
$pdf->Cell(30, 17, '', 0, 1);

$pdf->SetFont('Times', 'B', 18);
$pdf->Cell(0, 10, 'LAPORAN DATA SATUAN', 0, 1, 'C');
$pdf->Ln(10);
$pdf->SetFont('Times', 'B', 11);
$pdf->Cell(10, 6, 'NO', 1, 0, 'C');
$pdf->Cell(50, 6, 'NAMA SATUAN', 1, 0, 'C');
$pdf->Cell(100, 6, 'DESKRIPSI', 1, 1, 'C');
$i = 1;
$data = $this->db->get('satuan')->result_array();
foreach ($data as $d) {
    $pdf->SetFont('Times', '', 9);
    $pdf->Cell(10, 6, $i++, 1, 0, 'C');
    $pdf->Cell(50, 6, $d['name'], 1, 0, 'L');
    $pdf->Cell(100, 6, $d['diskripsi'], 1, 1, 'L');
}
$pdf->SetFont('Times', '', 10);
$pdf->Output('laporan_satuan.pdf', 'I');
