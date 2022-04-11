<?php

class Experiences extends CI_Controller
{
  public function index()
  {
    $data = array(
      'view' => 'experiences/experiences_index_view',
    );

    $this->load->view('landing/landing_view', $data);
  }
}
