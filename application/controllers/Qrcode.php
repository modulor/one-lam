<?php

class Qrcode extends CI_Controller
{
  public function index()
  {
    $this->load->view('qrcode/qrcode_index_view');
  }
}
