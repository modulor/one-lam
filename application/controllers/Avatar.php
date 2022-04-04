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
}
