<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ONE LAM CONFERENCE - POWER DEL CARMEN</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/fonts.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/general.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/register.css') ?>">
</head>

<body>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-md-4 offset-md-4">
          <div class="card">
            <div class="card-body">
              <h1>Registro</h1>
              <p class="mb-5">Realiza el registro de tu perfil<br>y personaliza tu Avatar</p>
              <div class="text-danger text-center"><?php echo validation_errors() ?></div>
              <form action="<?php echo base_url('register') ?>" method="post">
                <div class="mb-5">
                  <label for="email">Correo</label>
                  <input type="email" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
                </div>
                <div class="mb-5">
                  <label for="alias">Crea tu Alias</label>
                  <input type="text" name="alias" class="form-control" <?php echo isset($_POST['alias']) ? $_POST['alias'] : '' ?>>
                </div>
                <div class="mb-5 form-check">
                  <input type="checkbox" class="form-check-input" name="accept_terms_and_conditions">
                  <label class="form-check-label" for="accept_terms_and_conditions">
                    <a href="<?php echo base_url('terms-and-conditions.pdf') ?>" class="terms-and-conditions-link" target="_blank">
                      Acepto los términos y condiciones
                    </a>
                  </label>
                </div>
                <div class="text-end button-area">
                  <img src="<?php echo base_url('assets/images/arrow-right.png') ?>" alt="arrow right">
                  <button type="submit" class="btn btn-link btn-register">Crea tu Avatar</button>
                </div>
              </form>
            </div>
            <img src="<?php echo base_url('assets/images/register-pink-form.png') ?>" alt="home yellow form" class="card-img-bottom">
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>