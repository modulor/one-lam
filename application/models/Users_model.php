<?php

class Users_model extends CI_Model
{
  private $table = 'users';

  public function get_by_email($email)
  {
    return $this->db->where('email', $email)->get($this->table)->row();
  }

  public function get_by_alias($alias)
  {
    return $this->db->where('alias', $alias)->get($this->table)->row();
  }
}
