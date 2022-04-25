<?php

class Extras extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    if (!$this->session->userdata('login'))
      redirect(base_url('login'));
  }

  public function index()
  {
    $data = array(
      'view' => 'extras/extras_index_view',
    );

    $this->load->view('landing/landing_view', $data);
  }

  public function files()
  {
    $data = array(
      'view' => 'extras/extras_files_view',
    );

    $this->load->view('landing/landing_view', $data);
  }
}
