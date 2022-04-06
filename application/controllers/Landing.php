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
    echo "<a href='" . base_url('logout') . "'>Salir</a>";
  }
}
