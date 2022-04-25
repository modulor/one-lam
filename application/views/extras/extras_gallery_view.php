<main class="bg-extras pt-4">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body pt-5 extras-card-body">
            <h1 class="mb-4">Winners Wall</h1>
            <div class="row">
              <div class="col-md-2 d-none d-sm-block">
                <div class="d-grid gap-2 mb-4">
                  <a href="<?php echo base_url('gallery/24') ?>" class="btn <?php echo $day == 24 ? $button_classes['button_selected'] : $button_classes['button_normal'] ?>">
                    <span class="schedule-date">25</span><br>
                    April
                  </a>
                </div>
                <!-- <div class="d-grid gap-2 mb-4">
                  <a href="<?php echo base_url('gallery/26') ?>" class="btn <?php echo $day == 26 ? $button_classes['button_selected'] : $button_classes['button_normal'] ?>">
                    <span class="schedule-date">26</span><br>
                    April
                  </a>
                </div> -->
                <!-- <div class="d-grid gap-2 mb-4">
                  <a href="<?php echo base_url('gallery/27') ?>" class="btn <?php echo $day == 27 ? $button_classes['button_selected'] : $button_classes['button_normal'] ?>">
                    <span class="schedule-date">27</span><br>
                    April
                  </a>
                </div> -->
                <!-- <div class="d-grid gap-2 mb-4">
                  <a href="<?php echo base_url('gallery/28') ?>" class="btn <?php echo $day == 28 ? $button_classes['button_selected'] : $button_classes['button_normal'] ?>">
                    <span class="schedule-date">28</span><br>
                    April
                  </a>
                </div> -->
              </div>
              <div class="col-12 col-md-10">
                <?php
                $this->load->view("extras/extras_gallery_day_{$day}_view");
                ?>
              </div>
            </div>
            <div class="row">
              <div class="col-3 d-block d-sm-none">
                <div class="d-grid gap-2">
                  <a href="<?php echo base_url('gallery/24') ?>" class="btn <?php echo $day == 24 ? $button_classes['button_selected'] : $button_classes['button_normal'] ?>">
                    <span class="schedule-date">25</span><br>
                    April
                  </a>
                </div>
              </div>
              <div class="col-3 d-block d-sm-none">
                <!-- <div class="d-grid gap-2">
                  <a href="<?php echo base_url('gallery/26') ?>" class="btn <?php echo $day == 26 ? $button_classes['button_selected'] : $button_classes['button_normal'] ?>">
                    <span class="schedule-date">26</span><br>
                    April
                  </a>
                </div> -->
              </div>
              <div class="col-3 d-block d-sm-none">
                <!-- <div class="d-grid gap-2">
                  <a href="<?php echo base_url('gallery/27') ?>" class="btn <?php echo $day == 27 ? $button_classes['button_selected'] : $button_classes['button_normal'] ?>">
                    <span class="schedule-date">27</span><br>
                    April
                  </a>
                </div> -->
              </div>
              <div class="col-3 d-block d-sm-none">
                <!-- <div class="d-grid gap-2">
                  <a href="<?php echo base_url('gallery/28') ?>" class="btn <?php echo $day == 28 ? $button_classes['button_selected'] : $button_classes['button_normal'] ?>">
                    <span class="schedule-date">28</span><br>
                    April
                  </a>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>