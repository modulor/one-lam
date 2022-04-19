<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Avatars</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Correo</th>
              <th>Avatar</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($users as $user) :
            ?>
              <tr>
                <td><?php echo "{$user->firstname} {$user->lastname}" ?></td>
                <td><?php echo $user->email ?></td>
                <td>
                  <a href="<?php echo base_url("dashboard/avatar_view/{$user->id}"); ?>" target="_blank">
                    Ver Avatar
                  </a>
                </td>
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