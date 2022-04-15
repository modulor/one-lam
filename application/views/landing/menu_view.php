<div id="menu-overlay" class="menu-overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeMenu()">&times;</a>
  <div class="menu-overlay-content">
    <div class="mb-1">
      <button class="btn btn-link btn-link-menu" type="button" data-bs-toggle="collapse" data-bs-target="#schedule-collapse" aria-expanded="false" aria-controls="schedule-collapse">
        <i class="fa-solid fa-plus"></i> Winners Agenda
      </button>
    </div>
    <div class="collapse" id="schedule-collapse">
      <div class="p-4">
        <a href="<?php echo base_url('schedule/day/25') ?>" class="link-submenu">
          <img src="<?php echo base_url('assets/images/arrow-right.png') ?>" alt="arrow right"> april 25
        </a>
        <a href="<?php echo base_url('schedule/day/26') ?>" class="link-submenu">
          <img src="<?php echo base_url('assets/images/arrow-right.png') ?>" alt="arrow right"> april 26
        </a>
        <a href="<?php echo base_url('schedule/day/27') ?>" class="link-submenu">
          <img src="<?php echo base_url('assets/images/arrow-right.png') ?>" alt="arrow right"> april 27
        </a>
        <a href="<?php echo base_url('schedule/day/28') ?>" class="link-submenu">
          <img src="<?php echo base_url('assets/images/arrow-right.png') ?>" alt="arrow right"> april 28
        </a>
      </div>
    </div>
    <div class="mb-1">
      <button class="btn btn-link btn-link-menu" type="button" data-bs-toggle="collapse" data-bs-target="#experience-collapse" aria-expanded="false" aria-controls="experience-collapse">
        <i class="fa-solid fa-plus"></i> Daily Experience
      </button>
    </div>
    <div class="collapse" id="experience-collapse">
      <div class="p-4">
        <a href="<?php echo base_url('experiences/view/sports/1') ?>" class="link-submenu">
          <img src="<?php echo base_url('assets/images/arrow-right.png') ?>" alt="arrow right"> Sports
        </a>
        <a href="<?php echo base_url('experiences/view/business/1') ?>" class="link-submenu">
          <img src="<?php echo base_url('assets/images/arrow-right.png') ?>" alt="arrow right"> Business
        </a>
        <a href="<?php echo base_url('experiences/view/connect/1') ?>" class="link-submenu">
          <img src="<?php echo base_url('assets/images/arrow-right.png') ?>" alt="arrow right"> Connect
        </a>
      </div>
    </div>
    <div class="mb-1">
      <a href="<?php echo base_url('more') ?>">More</a>
    </div>
    <div class="extra-material-area text-end">
      <a href="<?php echo base_url('extras') ?>" class="link-extra-material">
        <img src="<?php echo base_url('assets/images/arrow-right.png') ?>" alt="arrow right"> Download<br>Content
      </a>
    </div>
  </div>
</div>