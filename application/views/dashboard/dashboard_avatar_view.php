<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ONE LAM CONFERENCE - POWER DEL CARMEN</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    @media (min-width: 1199px) {

      .avatar-body-selected,
      .avatar-eyes-selected,
      .avatar-accessory-selected,
      .avatar-badge-selected,
      .avatar-background-selected,
      .avatar-body-selected-success,
      .avatar-eyes-selected-success,
      .avatar-accessory-selected-success,
      .avatar-badge-selected-success,
      .avatar-background-selected-success {
        position: absolute;
        top: 70px;
        left: 400px;
        width: 560px;
        height: 560px;
      }
    }

    @media (max-width: 768px) {

      .avatar-body-selected,
      .avatar-eyes-selected,
      .avatar-accessory-selected,
      .avatar-badge-selected,
      .avatar-background-selected,
      .avatar-body-selected-success,
      .avatar-eyes-selected-success,
      .avatar-accessory-selected-success,
      .avatar-badge-selected-success,
      .avatar-background-selected-success {
        position: absolute;
        top: 70px;
        left: 10px;
        width: 300px;
        height: 300px;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center avatar-preview">
        <img class="avatar-background-selected-success" src="<?php echo base_url($avatar_images['background']) ?>" alt="background selected">
        <img class="avatar-body-selected-success" src="<?php echo base_url($avatar_images['body']) ?>" alt="avatar body">
        <img class="avatar-eyes-selected-success" src="<?php echo base_url($avatar_images['eyes']) ?>" alt="eyes selected">
        <img class="avatar-accessory-selected-success" src="<?php echo base_url($avatar_images['accessory']) ?>" alt="eyes saccessory">
        <img class="avatar-badge-selected-success" src="<?php echo base_url($avatar_images['badge']) ?>" alt="badge selected">
      </div>
    </div>
  </div>
</body>

</html>