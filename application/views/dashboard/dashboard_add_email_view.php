<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ONE LAM</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4">
        <form action="<?php echo base_url('dashboard/add_email') ?>" method="post">
          <div class="mb-3">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control">
          </div>
          <div class="mb-3">
            <label for="firstname">Firstname</label>
            <input type="text" name="firstname" class="form-control">
          </div>
          <div class="mb-3">
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" class="form-control">
          </div>
          <div class="mb-3">
            <label for="position">Position</label>
            <input type="text" name="position" class="form-control">
          </div>
          <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit">Add user</button>
          </div>
          <?php
          if (isset($ok)) {
          ?>
            <p class="text-success"><strong><?php echo $_POST['email'] ?></strong> agregado correctamente</p>
          <?php
          }
          ?>
        </form>
      </div>
      <div class="col-md-8">
        <table class="table">
          <thead>
            <tr>
              <th>Email</th>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Position</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($users_allowed as $user) :
            ?>
              <tr>
                <td><?php echo $user->email ?></td>
                <td><?php echo $user->firstname ?></td>
                <td><?php echo $user->lastname ?></td>
                <td><?php echo $user->position ?></td>
              </tr>
            <?php
            endforeach;
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html>