<?php

class More extends CI_Controller
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
      'view' => 'more/more_index_view',
    );

    $this->load->view('landing/landing_view', $data);
  }
}
