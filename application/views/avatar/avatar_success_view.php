<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ONE LAM CONFERENCE - POWER DEL CARMEN</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/fonts.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/avatar.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/general.css') ?>">
</head>

<body>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-md-4 offset-md-4">
          <div class="customize-area" style="background-image: url('<?php echo base_url('assets/images/avatar/avatar-choose-body-form.png') ?>');">
            <h1>&iexcl;Creaste tu<br>Avatar con éxito,<br><?php echo $this->session->userdata('alias') ?>!</h1>

            <div class="row mb-5">
              <div class="col-12 text-center avatar-preview">
                <img class="avatar-background-selected" src="<?php echo base_url($avatar_images['background']) ?>" alt="background selected">
                <img class="avatar-body-selected" src="<?php echo base_url($avatar_images['body']) ?>" alt="avatar body">
                <img class="avatar-eyes-selected" src="<?php echo base_url($avatar_images['eyes']) ?>" alt="eyes selected">
                <img class="avatar-accessory-selected" src="<?php echo base_url($avatar_images['accessory']) ?>" alt="eyes saccessory">
                <img class="avatar-badge-selected" src="<?php echo base_url($avatar_images['badge']) ?>" alt="badge selected">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 text-end">
              <img src="<?php echo base_url('assets/images/arrow-right.png') ?>" alt="arrow right">
              <a href="<?php echo base_url('landing') ?>" class="btn btn-link btn-next ms-2">Siguiente</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>