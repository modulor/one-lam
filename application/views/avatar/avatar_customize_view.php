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
  <link rel="stylesheet" href="<?php echo base_url('assets/css/general.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/avatar.css') ?>">
</head>

<body>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-md-4 offset-md-4">
          <div class="customize-area" style="background-image: url('<?php echo base_url('assets/images/avatar/avatar-choose-body-form.png') ?>');">
            <h1>Personaliza<br>tu Avatar</h1>
            <p>Elige tu cuerpo</p>
            <div id="choose-body">
              <div class="row">
                <div class="col-6">
                  <img name="avatar_body_image" id="avatar_body_image_1" onclick="chooseProperty('body',1)" src="<?php echo base_url('assets/images/avatar/body/body-1.png') ?>" alt="avatar body" class="img-fluid">
                </div>
                <div class="col-6">
                  <img name="avatar_body_image" id="avatar_body_image_2" onclick="chooseProperty('body',2)" src="<?php echo base_url('assets/images/avatar/body/body-2.png') ?>" alt="avatar body" class="img-fluid">
                </div>
              </div>
              <!-- <div class="row">
                <div class="col-6">
                  <img name="avatar_body_image" id="avatar_body_image_3" onclick="chooseProperty('body',3)" src="<?php echo base_url('assets/images/avatar/body/body-1.png') ?>" alt="avatar body" class="img-fluid">
                </div>
                <div class="col-6">
                  <img name="avatar_body_image" id="avatar_body_image_4" onclick="chooseProperty('body',4)" src="<?php echo base_url('assets/images/avatar/body/body-1.png') ?>" alt="avatar body" class="img-fluid">
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <img name="avatar_body_image" id="avatar_body_image_5" onclick="chooseProperty('body',5)" src="<?php echo base_url('assets/images/avatar/body/body-1.png') ?>" alt="avatar body" class="img-fluid">
                </div>
              </div> -->
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <i id="circle-step-1" class="fa-solid fa-circle"></i>
              <i id="circle-step-2" class="fa-regular fa-circle"></i>
              <i id="circle-step-3" class="fa-regular fa-circle"></i>
              <i id="circle-step-4" class="fa-regular fa-circle"></i>
              <i id="circle-step-5" class="fa-regular fa-circle"></i>
            </div>
            <div class="col-6 text-end">
              <img src="<?php echo base_url('assets/images/arrow-right.png') ?>" alt="arrow right">
              <button id="btn-next" type="button" class="btn btn-link btn-next ms-2">Siguiente</button>
            </div>
            <input type="hidden" id="avatar_body" value="">
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript">
    function chooseProperty(property, propertyNumber) {
      $(`#avatar_${property}`).val(propertyNumber);
      removeBorderToAllProperties(property);
      addBorderToProperty(property, propertyNumber);
    }

    function removeBorderToAllProperties(property) {
      $(`img[name="avatar_${property}_image"]`).removeClass('img-clicked');
    }

    function addBorderToProperty(property, propertyNumber) {
      $(`#avatar_${property}_image_${propertyNumber}`).addClass('img-clicked');
    }
  </script>

</body>

</html>