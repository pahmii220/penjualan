<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Report extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
    }

    //Laporan Kustomer...
    public function kustomerlap()
    {
        $pdf = new FPDF('p', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->SetFont('Times', 'B', 18);
        $pdf->SetFont('Times', 'B', 14);
        $pdf->Cell(0, 5, 'LAPORAN DATA KUSTOMER', 0, 1, 'C');
        $pdf->Cell(30, 8, '', 0, 1);
        $pdf->SetFont('Times', 'B', 9);
        $pdf->Cell(7, 6, 'NO', 1, 0, 'C');
        $pdf->Cell(37, 6, 'NIK', 1, 0, 'C');
        $pdf->Cell(37, 6, 'NAMA KUSTOMER', 1, 0, 'C');
        $pdf->Cell(30, 6, 'TELP', 1, 0, 'C');
        $pdf->Cell(45, 6, 'ALAMAT', 1, 1, 'C');
        $i = 1;
        $data = $this->db->get('kustomer')->result_array();
        foreach ($data as $d) {
            $pdf->SetFont('Times', '', 9);
            $pdf->Cell(7, 6, $i++, 1, 0);
            $pdf->Cell(37, 6, $d['nik'], 1, 0);
            $pdf->Cell(37, 6, $d['name'], 1, 0);
            $pdf->Cell(30, 6, $d['telp'], 1, 0);
            $pdf->Cell(45, 6, $d['alamat'], 1, 1);
        }
        $pdf->SetFont('Times','',10);
        $pdf->Output('laporan_kustomer.pdf', 'I');
    }
    public function headerlap()
    {
        $this->load->view('kustomer/report_header_only');
    }
    public function kustomerfull()
    {
        $this->load->view('kustomer/report_full');
    }

    public function kustomerkustom()
    {
        $this->load->view('kustomer/report_kustomer');
    }

    //Laporan Kategori
    public function kategorilap()
    {
        $pdf = new FPDF('P', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->SetFont('Times', 'B', 18);
        $pdf->Cell(0, 10, 'LAPORAN DATA KATEGORI', 0, 1, 'C');
        $pdf->Ln(10);
        $pdf->SetFont('Times', 'B', 11);
        $pdf->Cell(10, 6, 'NO', 1, 0, 'C');
        $pdf->Cell(50, 6, 'NAMA KATEGORI', 1, 1, 'C');
        $i = 1;
        $data = $this->db->get('kategori')->result_array();
        foreach ($data as $d) {
            $pdf->SetFont('Times', '', 9);
            $pdf->Cell(10, 6, $i++, 1, 0, 'C');
            $pdf->Cell(50, 6, $d['name'], 1, 1, 'L');
        }
        $pdf->SetFont('Times', '', 10);
        $pdf->Output('laporan_kategori.pdf', 'I');
    }

    public function katheader()
    {
        $this->load->view('kategori/report_header_only');
    }
    public function kategorifull()
    {
        $this->load->view('kategori/report_full');
    }

    public function kategorikustom()
    {
        $this->load->view('kategori/report_kategori');
    }

    //Laporan User
    public function userlap()
    {
        $pdf = new FPDF('P', 'mm', 'A4');
        $pdf->AddPage();
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
    }

    public function userheader()
    {
        $this->load->view('user/report_header_only');
    }
    public function userfull()
    {
        $this->load->view('user/report_full');
    }

    public function userkustom()
    {
        $this->load->view('user/report_user');
    }

    //laporan satuan
    public function satuanlap()
    {
        $pdf = new FPDF('P', 'mm', 'A4');
        $pdf->AddPage();
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
    }

    public function satuanheader()
    {
        $this->load->view('satuan/report_header_only');
    }
    public function satuanfull()
    {
        $this->load->view('satuan/report_full');
    }

    public function satuankustom()
    {
        $this->load->view('satuan/report_satuan');
    }

    //laporan supplier
    public function supplierlap()
    {
        $pdf = new FPDF('L', 'mm', 'A4');
        $pdf->AddPage();
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
        foreach ($data as $d) {
            $pdf->SetFont('Times', '', 9);
            $pdf->Cell(10, 6, $i++, 1, 0, 'C'); 
            $pdf->Cell(20, 6, $d['nik'], 1, 0, 'L'); 
            $pdf->Cell(40, 6, $d['name'], 1, 0, 'L'); 
            $pdf->Cell(30, 6, $d['telp'], 1, 0, 'L');
            $pdf->Cell(50, 6, $d['alamat'], 1, 0, 'L');
            $pdf->Cell(40, 6, $d['perusahaan'], 1, 0, 'L'); 
            $pdf->Cell(30, 6, $d['nama_bank'], 1, 0, 'L');
            $pdf->Cell(30, 6, $d['no_akun_bank'], 1, 1, 'L');
        }
        $pdf->SetFont('Times', '', 10);
        $pdf->Output('laporan_supplier.pdf', 'I');
    }


    public function supplierheader()
    {
        $this->load->view('supplier/report_header_only');
    }
    public function supplierfull()
    {
        $this->load->view('supplier/report_full');
    }

    public function supplierkustom()
    {
        $this->load->view('supplier/report_supplier');
    }

    //laporan Barang
    public function baranglap()
    {
        $pdf = new FPDF('P', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->SetFont('Times', 'B', 18);
        $pdf->Cell(0, 10, 'LAPORAN DATA BARANG', 0, 1, 'C');
        $pdf->Ln(10);
        $pdf->SetFont('Times', 'B', 11);
        $pdf->Cell(10, 6, 'NO', 1, 0, 'C');
        $pdf->Cell(50, 6, 'NAMA BARANG', 1, 0, 'C');
        $pdf->Cell(40, 6, 'HARGA JUAL', 1, 0, 'C');
        $pdf->Cell(40, 6, 'HARGA BELI', 1, 0, 'C');
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
    }
    public function barangheader()
    {
        $this->load->view('barang/report_header_only');
    }
    public function barangfull()
    {
        $this->load->view('barang/report_full');
    }

    public function barangkustom()
    {
        $this->load->view('barang/report_barang');
    }

}
