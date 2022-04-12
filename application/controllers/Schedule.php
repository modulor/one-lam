<?php

class Schedule extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    if (!$this->session->userdata('login'))
      redirect(base_url('login'));
  }

  public function index()
  {
    $this->day(25);
  }

  public function day($day)
  {
    $data = array(
      'day' => $day,
      'button_classes' => $this->get_day_button_class(),
      'view' => 'schedule/schedule_index_view',
    );

    $this->load->view('landing/landing_view', $data);
  }

  private function get_day_button_class()
  {
    return array(
      'button_selected' => 'btn-dark',
      'button_normal' => 'btn-light btn-border-black',
    );
  }
}
