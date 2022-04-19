<?php

class Experiences extends CI_Controller
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

  public function view($experience_name, $day)
  {
    $js = array(
      'js/experiences_rate.js'
    );

    $data = array(
      '_js' => $js,
      'day' => $day,
      'experience_name' => $experience_name,
      'view' => "experiences/{$experience_name}/{$experience_name}_view",
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

    $ip_address = $this->get_user_ip_address();
    $visitors_info = $this->get_ip_info($ip_address);
    $device_info = $this->get_device_info();

    $data = array(
      'total_stars' => $_POST['total_stars'],
      'experience_name' => $_POST['experience_name'],
      'day' => $_POST['day'],
      'users_id' => $_POST['users_id'],
      'rather_change' => $_POST['rather_change'],
      'like_most' => $_POST['like_most'],
      'created_at' => date('Y-m-d H:i:s'),
      'city' => $visitors_info->geoplugin_city,
      'region' => $visitors_info->geoplugin_regionName,
      'country' => $visitors_info->geoplugin_countryName,
      'device_os' => $device_info['os'],
      'device_type' => $device_info['device'],
      'device' => $_SERVER['HTTP_USER_AGENT'],
    );

    $this->Users_rates_model->create($data);
  }

  private function get_user_ip_address()
  {
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
      $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
      $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }

    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if (filter_var($client, FILTER_VALIDATE_IP)) {
      $ip = $client;
    } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
      $ip = $forward;
    } else {
      $ip = $remote;
    }

    return $ip;
  }

  private function get_ip_info($ip_address)
  {
    return @json_decode(
      file_get_contents("http://www.geoplugin.net/json.gp?ip=$ip_address")
    );
  }

  private function get_device_info()
  {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $os_platform = "Unknown OS Platform";
    $os_array = array(
      '/windows phone 8/i' => 'Windows Phone 8',
      '/windows phone os 7/i' => 'Windows Phone 7',
      '/windows nt 6.3/i' => 'Windows 8.1',
      '/windows nt 6.2/i' => 'Windows 8',
      '/windows nt 6.1/i' => 'Windows 7',
      '/windows nt 6.0/i' => 'Windows Vista',
      '/windows nt 5.2/i' => 'Windows Server 2003/XP x64',
      '/windows nt 5.1/i' => 'Windows XP',
      '/windows xp/i' => 'Windows XP',
      '/windows nt 5.0/i' => 'Windows 2000',
      '/windows me/i' => 'Windows ME',
      '/win98/i' => 'Windows 98',
      '/win95/i' => 'Windows 95',
      '/win16/i' => 'Windows 3.11',
      '/macintosh|mac os x/i' => 'Mac OS X',
      '/mac_powerpc/i' => 'Mac OS 9',
      '/linux/i' => 'Linux',
      '/ubuntu/i' => 'Ubuntu',
      '/iphone/i' => 'iPhone',
      '/ipod/i' => 'iPod',
      '/ipad/i' => 'iPad',
      '/android/i' => 'Android',
      '/blackberry/i' => 'BlackBerry',
      '/webos/i' => 'Mobile'
    );

    $found = false;
    $device = '';

    foreach ($os_array as $regex => $value) {
      if ($found)
        break;
      else if (preg_match($regex, $user_agent)) {
        $os_platform = $value;
        $device = !preg_match('/(windows|mac|linux|ubuntu)/i', $os_platform)
          ? 'MOBILE' : (preg_match('/phone/i', $os_platform) ? 'MOBILE' : 'DESKTOP');
      }
    }
    $device = !$device ? 'DESKTOP' : $device;
    return array('os' => $os_platform, 'device' => $device);
  }

  private function get_device_browser()
  {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    $browser = "Unknown Browser";

    $browser_array = array(
      '/msie/i' => 'Internet Explorer',
      '/firefox/i' => 'Firefox',
      '/safari/i' => 'Safari',
      '/chrome/i' => 'Chrome',
      '/opera/i' => 'Opera',
      '/netscape/i' => 'Netscape',
      '/maxthon/i' => 'Maxthon',
      '/konqueror/i' => 'Konqueror',
      '/mobile/i' => 'Handheld Browser'
    );

    foreach ($browser_array as $regex => $value) {
      if (preg_match($regex, $user_agent, $result)) {
        $browser = $value;
      }
    }
    return $browser;
  }
}
