<main class="container-fluid bg-experiences pt-4">
  <div class="row">
    <div class="col-md-4 offset-md-4">
      <div class="card">
        <div class="card-body">
          <h6>Daily Experience</h6>
          <h1 class="mb-4">WINNNING IN SPORTS</h1>
          <?php $this->load->view("experiences/sports/sports_day_{$day}_view") ?>
          <?php
          $params = array(
            'day' => $day,
            'experience_name' => 'sports',
          );

          $this->load->view('experiences/experiences_rate_view', $params);
          ?>
        </div>
      </div>
    </div>
  </div>
</main>