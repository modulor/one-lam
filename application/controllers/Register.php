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
        $validate_register = $this->validate_if_user_can_register();

        if ($validate_register['user_can_register']) {
          $this->create_user();
          $this->create_user_session();
          $this->go_to_avatar_creation();
        } else {
          $data = array(
            'is_a_user_not_allowed' => true,
            'message' => $validate_register['message'],
          );

          $this->load->view('register/register_index_view', $data);
        }
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
        'label' => 'Mail',
        'rules' => 'trim|required',
        'errors' => array('required|valid_email' => '%s is required')
      ),
      array(
        'field' => 'alias',
        'label' => 'Alias',
        'rules' => 'trim|required',
        'errors' => array('required' => '%s is required')
      ),
      array(
        'field' => 'accept_terms_and_conditions',
        'label' => 'Terms and conditions',
        'rules' => 'trim|required',
        'errors' => array('required' => '%s are required')
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
    redirect(base_url('avatar/customize'), 'refresh');
  }

  private function validate_if_user_can_register()
  {
    $user_allowed_to_register = $this->user_allowed_to_register();
    $user_not_registered_yet = $this->user_not_registered_yet();

    if ($user_allowed_to_register && $user_not_registered_yet) {
      return array(
        'user_can_register' => true,
        'message' => '',
      );
    } else {
      $message = 'Sorry, your mail is not allowed to register';
      if (!$user_not_registered_yet) {
        $message = 'Your mail is already registered';
      }

      return array(
        'user_can_register' => false,
        'message' => $message,
      );
    }
  }

  private function user_allowed_to_register()
  {
    $this->load->model('Users_allowed_model');
    $user_allowed = $this->Users_allowed_model->get_by_email($_POST['email']);

    return $user_allowed ? true : false;
  }

  private function user_not_registered_yet()
  {
    $user = $this->Users_model->get_by_email($_POST['email']);

    return $user ? false : true;
  }
}
