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

  public function sports($day)
  {
    $js = array(
      'js/experiences_rate.js'
    );

    $data = array(
      '_js' => $js,
      'day' => $day,
      'view' => "experiences/sports/sports_view",
    );

    if ($this->input->post()) {
      $this->rate();
      $data['is_rated'] = true;
    }

    $this->load->view('landing/landing_view', $data);
  }

  private function rate()
  {
    $this->load->model('Users_rates_model');

    $data = array(
      'total_stars' => $_POST['total_stars'],
      'experience_name' => $_POST['experience_name'],
      'day' => $_POST['day'],
      'users_id' => $_POST['users_id'],
      'comments' => $_POST['comments'],
      'created_at' => date('Y-m-d H:i:s'),
    );

    $this->Users_rates_model->create($data);
  }
}
