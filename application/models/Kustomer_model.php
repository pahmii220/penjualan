<?php defined('BASEPATH') or exit('No direct script access allowed');
class Kustomer_model extends CI_Model
{
    protected $_table = 'kustomer';
    protected $primary = 'id';
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function save()
    {
        $data = array(
            'nik' => htmlspecialchars($this->input->post('nik'), true),
            'name' => htmlspecialchars($this->input->post('name'), true),
            'telp' => htmlspecialchars($this->input->post('telp'), true),
            'email' => htmlspecialchars($this->input->post('email'), true),
            'alamat' => htmlspecialchars($this->input->post('alamat'), true)
        );
        return $this->db->insert($this->_table, $data);
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function editData()
    {
        $id = $this->input->post('id');
        $data = array(
            'nik' => htmlspecialchars($this->input->post('nik'), true),
            'name' => htmlspecialchars($this->input->post('name'), true),
            'telp' => htmlspecialchars($this->input->post('telp'), true),
            'email' => htmlspecialchars($this->input->post('email'), true),
            'alamat' => htmlspecialchars($this->input->post('alamat'), true)
        );
        return $this->db->set($data)->where($this->primary, $id)->update($this->_table);
    }

    public function delete($id)
    {
        $this->db->where('id', $id)->delete($this->_table);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata("success", "Data Kustomer Berhasil DiDelete");
        }
    }
}