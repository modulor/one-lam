<?php

class Avatar extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    if (!$this->session->userdata('login'))
      redirect(base_url('login'));

    $this->load->model('Users_avatars_model');
  }

  public function customize()
  {
    $this->load->view('avatar/avatar_customize_view');
  }

  public function create()
  {
    if ($this->input->post()) {
      $user_has_avatar = $this->Users_avatars_model->user_has_avatar(
        $this->session->userdata('id')
      );

      if (!$user_has_avatar) {
        $this->insert_into_database();
      }

      $avatar = $this->Users_avatars_model->get_by_users_id(
        $this->session->userdata('id')
      );

      $avatar_images = $this->get_avatar_images_path($avatar);

      $data = array(
        'avatar_images' => $avatar_images,
      );

      $this->load->view('avatar/avatar_success_view', $data);
    } else {
      redirect(base_url(), 'refresh');
    }
  }

  private function insert_into_database()
  {
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

  private function get_avatar_images_path($avatar)
  {
    $path = 'assets/images/avatar/';

    return array(
      'background' => "{$path}background/background-856px-{$avatar->background}.jpeg",
      'body' => "{$path}body/body-856px-{$avatar->body}.png",
      'eyes' => "{$path}eyes/eyes-856px-{$avatar->eyes}.png",
      'accessory' => "{$path}accessory/accessory-856px-{$avatar->accessory}.png",
      'badge' => "{$path}badge/badge-856px-{$avatar->badge}.png",
    );
  }
}
