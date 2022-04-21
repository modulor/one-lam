<!DOCTYPE html>
<html lang="es">

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
  <link rel="stylesheet" href="<?php echo base_url('assets/css/fonts.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/general.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/register.css') ?>">
</head>

<body>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <h1 class="register-title">Register</h1>
                  <p class="mb-5 register-subtitle">Register your profile and customize your winner avatar</p>
                </div>
                <div class="col-md-6">
                  <div class="text-danger text-center">
                    <?php echo validation_errors() ?>
                    <?php echo isset($is_a_user_not_allowed) ? $message : ''; ?>
                  </div>
                  <form action="<?php echo base_url('register') ?>" method="post" class="register">
                    <div class="mb-5">
                      <label for="email">Mail</label>
                      <input type="email" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
                    </div>
                    <div class="mb-5">
                      <label for="alias">Create your Alias</label>
                      <input type="text" name="alias" class="form-control" <?php echo isset($_POST['alias']) ? $_POST['alias'] : '' ?>>
                    </div>
                    <div class="mb-5 form-check">
                      <input type="checkbox" class="form-check-input" name="accept_terms_and_conditions">
                      <label class="form-check-label" for="accept_terms_and_conditions">
                        <a href="<?php echo base_url('terms-and-conditions.pdf') ?>" class="terms-and-conditions-link" target="_blank">
                          Terms & Conditions
                        </a>
                      </label>
                    </div>
                    <div class="text-end button-area">
                      <img src="<?php echo base_url('assets/images/arrow-right.png') ?>" alt="arrow right">
                      <button type="submit" class="btn btn-link btn-register">Create your Avatar </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <img src="<?php echo base_url('assets/images/register-pink-form.png') ?>" alt="home yellow form" class="card-img-bottom">
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>