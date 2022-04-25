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

  public function gallery($day)
  {
    $js = array(
      'js/extras_gallery.js',
    );

    $data = array(
      '_js' => $js,
      'day' => $day,
      'button_classes' => $this->get_day_button_class(),
      'view' => 'extras/extras_gallery_view',
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
