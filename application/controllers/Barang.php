<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->library('form_validation');
    }
    public function add()
    {
        $data = array(
            'title' => 'Tambah Data Barang',
            'kategori' => $this->db->get('kategori')->result_array(),
            'satuan' => $this->db->get('satuan')->result_array(),
            'supplier' => $this->db->get('supplier')->result_array(),
            'content' => 'barang/add_form',

        );
        $this->load->view('template/main', $data);
    }

    public function save()
    {
        $this->Barang_model->save();
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata("success", "Data Kategori Berhasil DiSimpan");
        }
        redirect('barang');
    }

    public function index()
    {
        $data = array(
            'title' => 'View Data Barang',
            'userlog' => infoLogin(),
            'barang' => $this->Barang_model->getAll(),
            'content' => 'barang/index'
        );
        $this->load->view('template/main', $data);
    }

    public function edit()
    {
        $this->Barang_model->editData();
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata("success", "Data barang Berhasil Diupdate");
        }
        redirect('barang');
    }

    public function getedit($id)
    {
        $data = array(
            'title' => 'Update Data Kategori',
            'kategori' => $this->db->get('kategori')->result_array(),
            'satuan' => $this->db->get('satuan')->result_array(),
            'supplier' => $this->db->get('supplier')->result_array(),
            'barang' => $this->Barang_model->getById($id),
            'content' => 'barang/edit_form'
        );
        $this->load->view('template/main', $data);
    }

    function delete($id)
    {
        $this->Barang_model->delete($id);
        redirect('barang');
    }
}