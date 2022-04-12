<?php

class Users_rates_model extends CI_Model
{
  private $table = 'users_rates';

  public function create($data)
  {
    $this->db->insert($this->table, $data);
  }
}
