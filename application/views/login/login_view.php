<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ONE LAM CONFERENCE - POWER DEL CARMEN</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/fonts.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/general.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css') ?>">
</head>

<body>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-md-4 offset-md-4">
          <div class="card">
            <div class="card-body">
              <div class="event-title">
                <h1>ONE LAM</h1>
                <h2>CONFERENCE</h2>
                <h3>LET'S WIN</h3>
              </div>
              <?php if (isset($error_message)) : ?>
                <p class="text-danger text-center m-0 p-0"><?php echo $error_message ?></p>
              <?php endif; ?>
              <form action="<?php echo base_url('login') ?>" method="post">
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
            <img src="<?php echo base_url('assets/images/login-yellow-form.png') ?>" alt="home yellow form" class="card-img-bottom">
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>