<?php

class Dashboard extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    if (!$this->session->userdata('login'))
      redirect(base_url('login'));
  }

  public function users_list()
  {
    $this->load->model('Users_avatars_model');

    $data = array(
      'users' => $this->Users_avatars_model->get_users_list_with_avatars(),
    );

    $this->load->view('dashboard/dashboard_users_list_view', $data);
  }

  public function avatar_view($users_id)
  {
    $this->load->model('Users_avatars_model');

    $avatar = $this->Users_avatars_model->get_by_users_id($users_id);

    $data = array(
      'users_id' => $users_id,
      'avatar_images' => $this->get_avatar_images_path($avatar),
    );

    $this->load->view('dashboard/dashboard_avatar_view', $data);
  }

  private function get_avatar_images_path($avatar)
  {
    $path = 'assets/images/avatar/';

    return array(
      'background' => "{$path}background/background-856px-{$avatar->background}.jpg",
      'body' => "{$path}body/body-856px-{$avatar->body}.png",
      'eyes' => "{$path}eyes/eyes-856px-{$avatar->eyes}.png",
      'accessory' => "{$path}accessory/accessory-856px-{$avatar->accessory}.png",
      'badge' => "{$path}badge/badge-856px-{$avatar->badge}.png",
    );
  }
}
