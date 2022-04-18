<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Avatars</title>
</head>

<body>
  <table>
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
          <td><?php echo $user->fullname ?></td>
          <td><?php echo $user->email ?></td>
          <td>
            <a href="<?php echo base_url("avatar/view/{$user->users_id}"); ?>" target="_blank">
              Ver Avatar
            </a>
          </td>
        </tr>
      <?php
      endforeach;
      ?>
    </tbody>
  </table>
</body>

</html>