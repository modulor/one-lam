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
        <div id="col-avatar-steps" class="col-md-4 offset-md-4 col-avatar-step-1">
          <div class="customize-area">
            <h1>Personaliza<br>tu Avatar</h1>
            <p id="avatar_instructions">Elige tu cuerpo</p>
            <?php
            $this->load->view('avatar/avatar_steps_view');
            ?>
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
              <button id="btn-next" onclick="nextStep();" disabled type="button" class="btn btn-link btn-next ms-2">Siguiente</button>
            </div>
            <form id="form_avatar" action="<?php echo base_url('avatar/create') ?>" method="post">
              <input type="hidden" id="current_step" name="current_step" value="1">
              <input type="hidden" id="avatar_body" name="avatar_body" value="">
              <input type="hidden" id="avatar_eyes" name="avatar_eyes" value="1">
              <input type="hidden" id="avatar_accessory" name="avatar_accessory" value="1">
              <input type="hidden" id="avatar_badge" name="avatar_badge" value="1">
              <input type="hidden" id="avatar_background" name="avatar_background" value="1">
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript">
    const BASE_URL = '<?php echo base_url() ?>';

    function chooseProperty(property, propertyNumber) {
      $(`#avatar_${property}`).val(propertyNumber);
      removeBorderToAllProperties(property);
      addBorderToProperty(property, propertyNumber);
      setAllPropertyPreview(property, propertyNumber);
      activeButtonNext();
    }

    function removeBorderToAllProperties(property) {
      $(`img[name="avatar_${property}_image"]`).removeClass('img-clicked');
    }

    function addBorderToProperty(property, propertyNumber) {
      $(`#avatar_${property}_image_${propertyNumber}`).addClass('img-clicked');
    }

    function activeButtonNext() {
      $(`#btn-next`).attr('disabled', false);
    }

    function nextStep() {
      const currentStep = parseInt($('#current_step').val());
      const nextStep = currentStep + 1;

      if (nextStep === 6) {
        submitFormAvatar();
      } else {
        $('#current_step').val(nextStep);
        $(`#avatar_step_${currentStep}`).addClass('d-none');
        $(`#avatar_step_${nextStep}`).removeClass('d-none');

        actionsByStepNumber(nextStep);
        updateProgressCircles(currentStep, nextStep);
      }
    }

    function disableButtonNext() {
      $('#btn-next').attr('disabled', true);
    }

    function updateProgressCircles(currentStep, nextStep) {
      $(`#circle-step-${currentStep}`).removeClass('fa-solid');
      $(`#circle-step-${currentStep}`).addClass('fa-regular');

      $(`#circle-step-${nextStep}`).removeClass('fa-regular');
      $(`#circle-step-${nextStep}`).addClass('fa-solid');
    }

    function actionsByStepNumber(stepNumber) {
      switch (stepNumber) {
        case 2:
          actionsForStepTwo();
          break;

        case 3:
          actionsForStepThree();
          break;

        case 4:
          actionsForStepFour();
          break;

        case 5:
          actionsForStepFive();
          break;

        default:
          break;
      }
    }

    function actionsForStepTwo() {
      $('#avatar_instructions').html('Elige un par de ojos');
      $('#col-avatar-steps').removeClass('col-avatar-step-1');
      $('#col-avatar-steps').addClass('col-avatar-step-2');
    }

    function actionsForStepThree() {
      $('#avatar_instructions').html('Elige un accesorio');
      $('#col-avatar-steps').removeClass('col-avatar-step-2');
      $('#col-avatar-steps').addClass('col-avatar-step-3');
    }

    function actionsForStepFour() {
      $('#avatar_instructions').html('Elige una insignia');
      $('#col-avatar-steps').removeClass('col-avatar-step-3');
      $('#col-avatar-steps').addClass('col-avatar-step-4');
    }

    function actionsForStepFive() {
      $('#avatar_instructions').html('Elige un fondo');
      $('#col-avatar-steps').removeClass('col-avatar-step-4');
      $('#col-avatar-steps').addClass('col-avatar-step-5');
    }

    function setAllPropertyPreview(property, propertyNumber) {
      const path = `assets/images/avatar/${property}/`;
      const extension = property === 'background' ? 'jpeg' : 'png';
      const filename = `${property}-856px-${propertyNumber}.${extension}`;
      const propertyImage = `${BASE_URL}${path}${filename}`;
      $(`.avatar-${property}-selected`).attr('src', propertyImage);
    }

    function submitFormAvatar() {
      $('#form_avatar').submit();
    }
  </script>

</body>

</html>