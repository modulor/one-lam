<?php

class Extras extends CI_Controller
{
  public function index()
  {
    $data = array(
      'view' => 'extras/extras_index_view',
    );

    $this->load->view('landing/landing_view', $data);
  }
}
