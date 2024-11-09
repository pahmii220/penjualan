<?php
$pdf = new FPDF('p', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetFont('Times', 'B', 18);
$pdf->Image('./assets/img/ktgr.png', 25, 5, 27, 24);
$pdf->Cell(25);
$pdf->SetFont('Times', 'B', 20);
$pdf->Cell(0, 5, 'JUMLAH DATA USER KOPERASI', 0, 1, 'C');
$pdf->Cell(25);
$pdf->SetFont('Times', 'B', 10);
$pdf->Cell(0, 5, 'WEBSITE :' . 'WWWW.HARUMBERSATU.COM' . '/ E-MAIL : ' . 'admin@harumbersatu.com', 0, 1, 'C');
$pdf->Cell(25);
$pdf->SetFont('Times', 'B', 10);
$pdf->Cell(0, 5, 'Banjarmasin Timur' . ' telp./ Fax : ' . '081349685149' . ' /' . 'KOPERASI HARUM MANIS BERSATU', 0, 1, 'C');


$pdf->SetLineWidth(1);
$pdf->Line(10, 36, 197, 36);
$pdf->SetLineWidth(0);
$pdf->Line(10, 37, 197, 37);
$pdf->Cell(30, 17, '', 0, 1);

$pdf->SetFont('Times', 'B', 18);
$pdf->Cell(0, 10, 'LAPORAN DATA USER', 0, 1, 'C');
$pdf->Ln(10);
$pdf->SetFont('Times', 'B', 9);
$pdf->Cell(10, 6, 'NO', 1, 0, 'C');
$pdf->Cell(20, 6, 'NIK', 1, 0, 'C');
$pdf->Cell(30, 6, 'USERNAME', 1, 0, 'C');
$pdf->Cell(40, 6, 'FULL NAME', 1, 0, 'C');
$pdf->Cell(25, 6, 'ROLE', 1, 0, 'C');
$pdf->Cell(65, 6, 'ALAMAT', 1, 1, 'C');

$i = 1;
$data = $this->db->get('user')->result_array();
foreach ($data as $d) {
    $pdf->SetFont('Times', '', 9);
    $pdf->Cell(10, 6, $i++, 1, 0, 'C');
    $pdf->Cell(20, 6, $d['nik'], 1, 0, 'C');
    $pdf->Cell(30, 6, $d['username'], 1, 0, 'C');
    $pdf->Cell(40, 6, $d['full_name'], 1, 0, 'C');
    $pdf->Cell(25, 6, $d['role'], 1, 0, 'C');
    $pdf->Cell(65, 6, $d['address'], 1, 1, 'L');
}

$pdf->SetFont('Times', '', 10);
$pdf->Output('laporan_user.pdf', 'I');
