<?php

class More extends CI_Controller
{
  public function index()
  {
    $data = array(
      'view' => 'more/more_index_view',
    );

    $this->load->view('landing/landing_view', $data);
  }
}
