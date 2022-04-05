<?php

class Avatar extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    if (!$this->session->userdata('login'))
      redirect(base_url('login'));
  }

  public function customize()
  {
    $this->load->view('avatar/avatar_customize_view');
  }

  public function create()
  {
    $this->load->model('Users_avatars_model');

    $data = array(
      'body' => $_POST['avatar_body'],
      'eyes' => $_POST['avatar_eyes'],
      'accessory' => $_POST['avatar_accessory'],
      'badge' => $_POST['avatar_badge'],
      'background' => $_POST['avatar_background'],
      'users_id' => $this->session->userdata('id'),
      'created_at' => date('Y-m-d H:i:s'),
    );

    $this->Users_avatars_model->create($data);
  }
}
