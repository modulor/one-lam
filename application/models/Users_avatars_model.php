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

  public function get_users_list_with_avatars()
  {
    $fields = 'u.id, u.email, ua.firstname, ua.lastname, uav.body, uav.eyes,';
    $fields .= 'uav.accessory, uav.badge, uav.background';

    return $this->db->select($fields)
      ->from('users_allowed ua')
      ->join('users u', 'u.email = ua.email')
      ->join('users_avatars uav', 'uav.users_id = u.id')
      ->get()
      ->result();


    // select 
    // from users_allowed ua
    // join users u on u.email = ua.email
    // join users_avatars uav on uav.users_id = u.id;
  }
}
