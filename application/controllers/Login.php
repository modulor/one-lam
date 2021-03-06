<?php

class Login extends CI_Controller
{
  const USER_INACTIVE = 0;
  const USER_ACTIVE = 1;

  function __construct()
  {
    parent::__construct();
    $this->load->model('Users_model');
    $this->load->library('form_validation');
  }

  public function index()
  {
    if ($this->is_user_login())
      redirect(base_url('landing'), 'refresh');

    if (isset($_POST['email_alias'])) {
      $this->try_to_login();
    } else {
      $this->load->view('login/login_view');
    }
  }

  private function is_user_login()
  {
    $user_session = $this->session->all_userdata();

    if (isset($user_session['login']) && $user_session['login'] == TRUE)
      return true;

    return false;
  }

  public function try_to_login()
  {
    if ($this->is_login_form_valid()) {
      $login = $this->validate_login_credentials($this->input->post());
      $this->session->set_userdata($login);

      if (!$login['avatar']) {
        $this->go_to_avatar_creation();
      } else {
        if ($login['success']) {
          $this->grant_access_to_application($login);
        } else {
          $this->display_error_access_not_allowed($login);
        }
      }
    } else {
      $data['error_message'] = 'Por favor ingrese un correo o alias';
      $this->load->view('login/login_view', $data);
    }
  }

  private function is_login_form_valid()
  {
    $this->form_validation->set_rules($this->config_login_rules());

    return $this->form_validation->run();
  }

  private function validate_login_credentials($form)
  {
    $user_by_email = $this->Users_model->get_by_email($form['email_alias']);
    $user_by_alias = $this->Users_model->get_by_alias($form['email_alias']);

    $user = $user_by_email ? $user_by_email : $user_by_alias;

    if ($user) {
      switch ($user->active) {
        case self::USER_ACTIVE:
          $this->load->model('Users_avatars_model');

          $user_session = array(
            'success' => true,
            'login' => true,
            'id' => $user->id,
            'email' => $user->email,
            'alias' => $user->alias,
            'avatar' => $this->Users_avatars_model->get_by_users_id($user->id),
          );
          break;

        case self::USER_INACTIVE:
          $user_session = array(
            'success' => false,
            'message' => 'Tu cuenta ha sido desativada'
          );
          break;

        default:
          $user_session = array(
            'success' => false,
            'message' => "Error inesperado, intente m??s tarde"
          );
          break;
      }
    } else {
      $user_session = array(
        'success' => false,
        'message' => 'Mail or alias not founded'
      );
    }

    return $user_session;
  }

  private function config_login_rules()
  {
    return array(
      array(
        'field' => 'email_alias',
        'label' => 'Mail or Alias',
        'rules' => 'trim|required',
        'errors' => array('required' => '%s is required')
      ),
    );
  }

  private function grant_access_to_application($login)
  {
    redirect(base_url('landing/welcome'), 'refresh');
  }

  private function display_error_access_not_allowed($login)
  {
    $data['error_message'] = $login['message'];

    $this->load->view('login/login_view', $data);
  }

  private function go_to_avatar_creation()
  {
    redirect(base_url('avatar/customize'), 'refresh');
  }
}
