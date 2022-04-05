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
            <input type="hidden" id="current_step" value="1">
            <input type="hidden" id="avatar_body" value="">
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

      $('#current_step').val(nextStep);
      $(`#avatar_step_${currentStep}`).addClass('d-none');
      $(`#avatar_step_${nextStep}`).removeClass('d-none');

      actionsByStepNumber(nextStep);
    }

    function actionsByStepNumber(stepNumber) {
      switch (stepNumber) {
        case 2:
          actionsForStepTwo();
          break;

        default:
          break;
      }
    }

    function actionsForStepTwo() {
      const bodyNumber = $('#avatar_body').val();
      const bodyImage = `${BASE_URL}assets/images/avatar/body/body-856px-${bodyNumber}.png`
      $('#avatar_preview_step_2').attr('src', bodyImage)
    }
  </script>

</body>

</html>