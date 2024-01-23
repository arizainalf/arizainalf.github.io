<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
  public function cek_login($username, $password)
  {
    $this->db->select('id, username, password');
    $this->db->where('username', $username);
    $query = $this->db->get('user');

    if ($query->num_rows() > 0) {
      $user = $query->row();
      if (password_verify($password, $user->password)) {
        return $user;
      }
    }
    return false;
  }
  public function where($table, $where)
  {
    return $this->db->get_where($table, $where);
  }
}