<?php

class Users_allowed_model extends CI_Model
{
  private $table = 'users_allowed';

  public function get_by_email($email)
  {
    return $this->db->where('email', $email)->get($this->table)->row();
  }

  public function create($data)
  {
    $this->db->insert($this->table, $data);
  }

  public function get_all()
  {
    return $this->db->order_by('email')->get($this->table)->result();
  }
}
