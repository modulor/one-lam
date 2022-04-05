<?php

class Users_Avatars_model extends CI_Model
{
  private $table = 'users_avatars';

  public function create($data)
  {
    $this->db->insert($this->table, $data);
  }

  public function user_has_avatar($users_id)
  {
    $rows = $this->db->where('users_id', $users_id)
      ->get($this->table)
      ->num_rows();

    if ($rows > 0)
      return true;

    return false;
  }

  public function get_by_users_id($users_id)
  {
    return $this->db->where('users_id', $users_id)->get($this->table)->row();
  }
}
