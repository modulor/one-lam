<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ONE LAM CONFERENCE - POWER DEL CARMEN</title>
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('assets/images/favicon/apple-icon-57x57.png'); ?>">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('assets/images/favicon/apple-icon-60x60.png'); ?>">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/images/favicon/apple-icon-72x72.png'); ?>">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/images/favicon/apple-icon-76x76.png'); ?>">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets/images/favicon/apple-icon-114x114.png'); ?>">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('assets/images/favicon/apple-icon-120x120.png'); ?>">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('assets/images/favicon/apple-icon-144x144.png'); ?>">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('assets/images/favicon/apple-icon-152x152.png'); ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/images/favicon/apple-icon-180x180.png'); ?>">
  <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url('assets/images/favicon/android-icon-192x192.png'); ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/images/favicon/favicon-32x32.png'); ?>">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/images/favicon/favicon-96x96.png'); ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/images/favicon/favicon-16x16.png'); ?>">
  <link rel="manifest" href="<?php echo base_url('assets/images/favicon/manifest.json'); ?>">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo base_url('assets/images/favicon/ms-icon-144x144.png') ?>">
  <meta name="theme-color" content="#ffffff">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/fonts.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/general.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/landing.css') ?>">
</head>

<body>
  <?php $this->load->view('landing/menu_view') ?>
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <div class="container py-1">
      <div class="col-4">
        <button onclick="openMenu()" type="button" class="btn btn-link btn-open-menu">
          <i class="fa-solid fa-bars"></i>
        </button>
      </div>
      <div class="col-4 text-center">
        <img src="<?php echo base_url('assets/images/logo-one-lam.png') ?>" width="110" alt="one lam">
      </div>
      <div class="col-4 text-end">
        <div class="user-avatar">
          <img class="user-avatar-property" src="<?php echo base_url("assets/images/avatar/background/background-150px-{$this->session->userdata('avatar')->background}.jpg") ?>" alt="background selected" height="45">
          <img class="user-avatar-property" src="<?php echo base_url("assets/images/avatar/body/body-400px-{$this->session->userdata('avatar')->body}.png") ?>" alt="avatar body">
          <img class="user-avatar-property" src="<?php echo base_url("assets/images/avatar/eyes/eyes-150px-{$this->session->userdata('avatar')->eyes}.png") ?>" alt="eyes selected">
          <img class="user-avatar-property" src="<?php echo base_url("assets/images/avatar/accessory/accessory-150px-{$this->session->userdata('avatar')->accessory}.png") ?>" alt="eyes saccessory">
          <img class="user-avatar-property" src="<?php echo base_url("assets/images/avatar/badge/badge-150px-{$this->session->userdata('avatar')->badge}.png") ?>" alt="badge selected">
        </div>
      </div>
    </div>
  </nav>
  <?php
  $this->load->view($view);
  ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="<?php echo base_url('assets/js/landing.js') ?>"></script>
  <?php
  if (isset($_js)) :
    foreach ($_js as $js) :
  ?>
      <script src="<?php echo base_url("assets/{$js}") ?>"></script>
  <?php
    endforeach;
  endif;
  ?>
</body>

</html>