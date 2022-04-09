<main class="container">
  <div class="row">
    <div class="col-md-4 offset-md-4">
      <h1>
        &iexcl;Bienvenido<br>
        de vuelta,<br>
        <?php echo $this->session->userdata('alias') ?>!
      </h1>
      <div class="avatar-preview">
        <img class="user-avatar-preview-img" src="<?php echo base_url("assets/images/avatar/background/background-400px-{$this->session->userdata('avatar')->background}.jpg") ?>" alt="background selected">
        <img class="user-avatar-preview-img" src="<?php echo base_url("assets/images/avatar/body/body-400px-{$this->session->userdata('avatar')->body}.png") ?>" alt="avatar body">
        <img class="user-avatar-preview-img" src="<?php echo base_url("assets/images/avatar/eyes/eyes-400px-{$this->session->userdata('avatar')->eyes}.png") ?>" alt="eyes selected">
        <img class="user-avatar-preview-img" src="<?php echo base_url("assets/images/avatar/accessory/accessory-400px-{$this->session->userdata('avatar')->accessory}.png") ?>" alt="eyes saccessory">
        <img class="user-avatar-preview-img" src="<?php echo base_url("assets/images/avatar/badge/badge-400px-{$this->session->userdata('avatar')->badge}.png") ?>" alt="badge selected">
      </div>
      <div class="row">
        <div class="col text-end">
          <img src="<?php echo base_url('assets/images/arrow-right.png') ?>" alt="arrow right">
          <a href="<?php echo base_url('landing') ?>" class="btn btn-link">
            Siguiente
          </a>
        </div>
      </div>
    </div>
  </div>
</main>