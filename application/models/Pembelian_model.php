<?php defined('BASEPATH') or exit('No direct script access allowed');
class Pembelian_model extends CI_Model
{
    protected $_table = "pembelian";
    protected $primary = "id";

    public function getAll()
    {
        $sql = "SELECT * FROM pembelian LEFT JOIN supplier ON pembelian.id = supplier.id LEFT JOIN user ON supplier.id = user.id; ";
        return $this->db->query($sql)->result();
    }

    public function save()
    {
        $query = $this->db->query("SELECT IFNULL(MAX(id), 0) + 1 AS new_id FROM pembelian");
        $new_id = $query->row()->new_id;
        $data = array(
            'invoice' => htmlspecialchars($this->input->post('invoice', true)),
            'total' => htmlspecialchars($this->input->post('Total', true)),
            'bayar' => htmlspecialchars($this->input->post('Bayar', true)),
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
            'tanggal' => htmlspecialchars($this->input->post('tanggal', true)),
            'supplier_id' => htmlspecialchars($this->input->post('supplier', true)),
            'user_id' => $this->session->userdata("id"),
        );
        return $this->db->insert($this->_table, $data);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, [$this->primary => $id])->row();
    }

    public function editData()
    {
        $id = $this->input->post('id');
        $data = array(
            'invoice' => htmlspecialchars($this->input->post('invoice', true)),
            'total' => htmlspecialchars($this->input->post('total', true)),
            'bayar' => htmlspecialchars($this->input->post('bayar', true)),
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
            'tanggal' => htmlspecialchars($this->input->post('tanggal', true)),
            'supplier_id' => htmlspecialchars($this->input->post('supplier', true)),
            'user_id' => $this->session->userdata("id"),
        );
        return $this->db->set($data)->where($this->primary, $id)->update($this->_table);
    }

    public function delete($id)
    {
        $this->db->where('id', $id)->delete($this->_table);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata("success", "Data Pembelian Berhasil DiDelete");
        }
    }
}
