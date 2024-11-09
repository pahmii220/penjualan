<?php
$pdf = new FPDF('L', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetFont('Times', 'B', 18);
$pdf->Image('./assets/img/cart.png', 35, 5, 27, 24);
$pdf->Cell(25);
$pdf->Cell(0, 10, 'KOPERASI HARUM MANUS BERSATU', 0, 1, 'C');

$pdf->Cell(25);
$pdf->SetFont('Times', 'B', 10);
$pdf->Cell(0, 5, 'WEBSITE: WWW.HARUMBERSATU.COM / E-MAIL: admin@harumbersatu.com', 0, 1, 'C');

$pdf->Cell(25);
$pdf->Cell(0, 5, 'Banjarmasin Utara - Telp./Fax: 081349685149 / KOPERASI HARUM MANIS BERSATU', 0, 1, 'C');

$pdf->SetLineWidth(1);
$pdf->Line(10, 36, 287, 36);
$pdf->SetLineWidth(0);
$pdf->Line(10, 37, 287, 37);
$pdf->Ln(15);
$pdf->SetFont('Times', 'B', 18);
$pdf->Cell(0, 10, 'LAPORAN DATA SUPPLIER', 0, 1, 'C');
$pdf->Ln(10);

$pdf->SetFont('Times', 'B', 11);
$pdf->Cell(10, 6, 'NO', 1, 0, 'C');
$pdf->Cell(20, 6, 'NIK', 1, 0, 'C');
$pdf->Cell(40, 6, 'NAMA', 1, 0, 'C');
$pdf->Cell(30, 6, 'TELEPON', 1, 0, 'C');
$pdf->Cell(50, 6, 'ALAMAT', 1, 0, 'C');
$pdf->Cell(40, 6, 'PERUSAHAAN', 1, 0, 'C');
$pdf->Cell(30, 6, 'NAMA BANK', 1, 0, 'C');
$pdf->Cell(30, 6, 'NO AKUN BANK', 1, 1, 'C');

$i = 1;
$data = $this->db->get('supplier')->result_array();
$pdf->SetFont('Times', '', 9);
foreach ($data as $d) {
    $pdf->Cell(10, 6, $i++, 1, 0, 'C');
    $pdf->Cell(20, 6, $d['nik'], 1, 0, 'L');
    $pdf->Cell(40, 6, $d['name'], 1, 0, 'L');
    $pdf->Cell(30, 6, $d['telp'], 1, 0, 'L');
    $pdf->Cell(50, 6, $d['alamat'], 1, 0, 'L');
    $pdf->Cell(40, 6, $d['perusahaan'], 1, 0, 'L');
    $pdf->Cell(30, 6, $d['nama_bank'], 1, 0, 'L');
    $pdf->Cell(30, 6, $d['no_akun_bank'], 1, 1, 'L');
}

$pdf->Output('laporan_supplier.pdf', 'I');
