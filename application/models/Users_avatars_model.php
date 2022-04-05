<?php

class Users_Avatars_model extends CI_Model
{
  private $table = 'users_avatars';

  public function create($data)
  {
    $this->db->insert($this->table, $data);
  }
}
