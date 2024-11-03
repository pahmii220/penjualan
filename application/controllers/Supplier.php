<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Supplier extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Supplier_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data = array(
            'title' => 'View Data Supplier',
            'userlog' => infoLogin(),
            'supplier' => $this->Supplier_model->getAll(),
            'content' => 'supplier/index'
        );
        $this->load->view('template/main', $data);
    }

    public function add()
    {
        $data = array(
            'title' => 'Tambah Data Supplier',
            'content' => 'supplier/add_form'
        );
        $this->load->view('template/main', $data);
    }

    public function save()
    {
        $this->Supplier_model->save();
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata("success", "Data Supplier Berhasil DiSimpan");
        }
        redirect('supplier');
    }

    public function edit()
    {
        $this->Supplier_model->editData();
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata("success", "Data supplier Berhasil Diupdate");
        }
        redirect('supplier');
    }

    public function getedit($id)
    {
        $data = array(
            'title' => 'Update Data Supplier',
            'supplier' => $this->Supplier_model->getById($id),
            'content' => 'supplier/edit_form'
        );
        $this->load->view('template/main', $data);
    }


    function delete($id)
    {
        $this->Supplier_model->delete($id);
        redirect('supplier');
    }

}