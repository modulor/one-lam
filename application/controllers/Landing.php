<?php

class Landing extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    if (!$this->session->userdata('login'))
      redirect(base_url('login'));
  }

  public function index()
  {
    $this->load->view('landing/landing_view');
  }

  public function welcome()
  {
    $data = array(
      'view' => 'landing/landing_welcome_view',
    );

    $this->load->view('landing/landing_view', $data);
  }
}
