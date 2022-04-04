<?php

class Register extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Users_model');
    $this->load->library('form_validation');
  }

  public function index()
  {
    if (isset($_POST['email'])) {
      if (!$this->is_form_valid()) {
        $this->load->view('register/register_index_view');
      } else {
        $this->create_user();
        $this->create_user_session();
        $this->go_to_avatar_creation();
      }
    } else {
      $this->load->view('register/register_index_view');
    }
  }

  private function create_user()
  {
    $data = array(
      'email' => $_POST['email'],
      'alias' => $_POST['alias'],
      'created_at' => date('Y-m-d H:i:s'),
      'active' => 1,
    );

    $this->Users_model->create($data);
  }

  private function is_form_valid()
  {
    $this->form_validation->set_rules($this->form_rules());

    return $this->form_validation->run();
  }

  private function form_rules()
  {
    return array(
      array(
        'field' => 'email',
        'label' => 'Correo electrónico',
        'rules' => 'trim|required',
        'errors' => array('required|valid_email' => '%s es obligatorio')
      ),
      array(
        'field' => 'alias',
        'label' => 'Alias',
        'rules' => 'trim|required',
        'errors' => array('required' => '%s es obligatorio')
      ),
      array(
        'field' => 'accept_terms_and_conditions',
        'label' => 'Términos y condiciones',
        'rules' => 'trim|required',
        'errors' => array('required' => '%s es obligatorio')
      ),
    );
  }

  private function create_user_session()
  {
    $user = $this->Users_model->get_by_email($_POST['email']);

    $this->session->set_userdata(array(
      'success' => true,
      'login' => true,
      'id' => $user->id,
      'email' => $user->email,
      'alias' => $user->alias,
    ));
  }

  private function go_to_avatar_creation()
  {
    redirect(base_url('avatar/choose_body'), 'refresh');
  }
}
