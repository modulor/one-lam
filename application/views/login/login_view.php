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
  <link rel="stylesheet" href="<?php echo base_url('assets/css/fonts.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/general.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css') ?>">
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
                  <div class="event-title">
                    <h1>ONE LAM</h1>
                    <h2>CONFERENCE</h2>
                    <h3>WIN LAM</h3>
                  </div>
                </div>
                <div class="col-md-6 col-form-area">
                  <?php if (isset($error_message)) : ?>
                    <p class="text-danger text-center m-0 p-0"><?php echo $error_message ?></p>
                  <?php endif; ?>
                  <form action="<?php echo base_url('login') ?>" method="post" class="login">
                    <div class="form-group mb-4">
                      <input type="text" name="email_alias" class=" form-control form-control-email-alias" placeholder="Write your mail or alias" autofocus>
                    </div>
                    <p class="text-end">
                      <img src="<?php echo base_url('assets/images/arrow-right.png') ?>" alt="arrow right">
                      <button type="submit" class="btn btn-link btn-login ms-2">Log in</button>
                    </p>
                  </form>
                  <p class="text-center">No account?</p>
                  <p class="text-end">
                    <img src="<?php echo base_url('assets/images/arrow-right.png') ?>" alt="arrow right">
                    <a href="<?php echo base_url('register') ?>" class="link-register">Register now!</a>
                  </p>
                </div>
              </div>
            </div>
            <img src="<?php echo base_url('assets/images/login-yellow-form.png') ?>" alt="home yellow form" class="card-img-bottom">
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>