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
  <main class="bg-avatar-create main-avatar-customize">
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="col-avatar-step-success">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <p class="mb-1 avatar-success-subtitle-area">You are a step closer to win, <?php echo $this->session->userdata('alias') ?></p>
                    <h1 class="avatar-success-title-area">That's it! here's a digital version of you!</h1>
                  </div>
                  <div class="col-md-6">
                    <div class="avatar-success-preview-desktop">
                      <div class="row mb-5">
                        <div class="col-12 text-center avatar-preview">
                          <img class="avatar-background-selected-success" src="<?php echo base_url($avatar_images['background']) ?>" alt="background selected">
                          <img class="avatar-body-selected-success" src="<?php echo base_url($avatar_images['body']) ?>" alt="avatar body">
                          <img class="avatar-eyes-selected-success" src="<?php echo base_url($avatar_images['eyes']) ?>" alt="eyes selected">
                          <img class="avatar-accessory-selected-success" src="<?php echo base_url($avatar_images['accessory']) ?>" alt="eyes saccessory">
                          <img class="avatar-badge-selected-success" src="<?php echo base_url($avatar_images['badge']) ?>" alt="badge selected">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 text-end">
                          <img src="<?php echo base_url('assets/images/arrow-right.png') ?>" alt="arrow right">
                          <a href="<?php echo base_url('landing') ?>" class="btn btn-link btn-next ms-2">Next step</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <img src="<?php echo base_url('assets/images/avatar/avatar-form-step-success-2.png') ?>" alt="home yellow form" class="avatar-form-step-success-2">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>