<?php
$pdf = new FPDF('p', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetFont('Times', 'B', 18);
$pdf->Image('./assets/img/ktgr.png', 25, 5, 27, 24);
$pdf->Cell(25);
$pdf->SetFont('Times', 'B', 20);
$pdf->Cell(0, 5, 'MACAM MACAM BARANG', 0, 1, 'C');
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
$pdf->Cell(0, 10, 'LAPORAN DATA BARANG', 0, 1, 'C');
$pdf->Ln(10);
$pdf->SetFont('Times', 'B', 11);
$pdf->Cell(10, 6, 'NO', 1, 0, 'C');
$pdf->Cell(50, 6, 'NAMA BARANG', 1, 0, 'C');
$pdf->Cell(40, 6, 'HARGA BELI', 1, 0, 'C');
$pdf->Cell(40, 6, 'HARGA JUAL', 1, 0, 'C');
$pdf->Cell(20, 6, 'STOK', 1, 1, 'C');
$i = 1;
$data = $this->db->get('barang')->result_array();
foreach ($data as $d) {
    $pdf->SetFont('Times', '', 9);
    $pdf->Cell(10, 6, $i++, 1, 0, 'C');
    $pdf->Cell(50, 6, $d['name'], 1, 0, 'C');
    $pdf->Cell(40, 6, $d['harga_jual'], 1, 0, 'C');
    $pdf->Cell(40, 6, $d['harga_beli'], 1, 0, 'C');
    $pdf->Cell(20, 6, $d['stok'], 1, 1, 'C');
}
$pdf->Output('laporan_barang.pdf', 'I');
