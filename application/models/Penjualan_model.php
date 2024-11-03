<?php defined('BASEPATH') or exit('No direct script access allowed');
class Penjualan_model extends CI_Model
{
    protected $_table = "penjualan";
    protected $primary = "id";
    public function getAll()
    {

        $sql = "SELECT * FROM penjualan LEFT JOIN kustomer ON penjualan.id = kustomer.id LEFT JOIN user ON kustomer.id = user.id; ";
        return $this->db->query($sql)->result();
    }

    public function save()
    {
        $data = array(
            'invoice' => htmlspecialchars($this->input->post('invoice'), true),
            'total' => htmlspecialchars($this->input->post('total'), true),
            'bayar' => htmlspecialchars($this->input->post('bayar'), true),
            'kembali' => htmlspecialchars($this->input->post('kembali'), true),
            'tanggal' => htmlspecialchars($this->input->post('tanggal'), true),
            'kustomer_id' => htmlspecialchars($this->input->post('kustomer'), true),
            'user_id' => $this->session->userdata("id"),
            //$this->session->userdata("userid')
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
            'invoice' => htmlspecialchars($this->input->post('invoice'), true),
            'total' => htmlspecialchars($this->input->post('total'), true),
            'bayar' => htmlspecialchars($this->input->post('bayar'), true),
            'kembali' => htmlspecialchars($this->input->post('kembali'), true),
            'tanggal' => htmlspecialchars($this->input->post('tanggal'), true),
            'kustomer_id' => htmlspecialchars($this->input->post('kustomer'), true),
            'user_id' => $this->session->userdata("id"),
            //$this->session->userdata("userid')
        );
        return $this->db->set($data)->where($this->primary, $id)->update($this->_table);
    }

    public function delete($id)
    {
        $this->db->where('id', $id)->delete($this->_table);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata("success", "Data Kategori Berhasil DiDelete");
        }
    }
}