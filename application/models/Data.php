<?php

class Data extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }
  public function get_all($table)
  {
    $query = $this->db->get($table); // 'kegiatan' adalah nama tabel di database Anda
    return $query->result(); // Mengembalikan hasil dalam bentuk array objek
  }
  public function get_limit($table)
  {
    $query = $this->db->get($table, 8); // 'kegiatan' adalah nama tabel di database Anda
    return $query->result(); // Mengembalikan hasil dalam bentuk array objek
  }
  public function get_data_by_id($table, $id)
  {
    return $this->db->get_where($table, $id);
  }

  public function edit_data($table, $data, $id)
  {
    $this->db->where('id', $id);
    $this->db->update($table, $data);
  }
  public function input_data($table, $data)
  {
    $this->db->insert($table, $data);
  }
  public function delete_data($table, $id)
  {
    $this->db->where('id', $id);
    $this->db->delete($table);
  }
  public function getvisi($table)
  {
    $this->db->select('visi');
    $this->db->get($table);

  }
  public function hitungjumlah($table)
  {
    $query = $this->db->get($table);
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }
}