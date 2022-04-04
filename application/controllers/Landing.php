<?php

class Landing extends CI_Controller
{
  public function index()
  {
    echo "<a href='" . base_url('logout') . "'>Salir</a>";
  }
}
