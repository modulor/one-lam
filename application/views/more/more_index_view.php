<main class="bg-more pt-4">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-7">
        <div class="card mb-4">
          <div class="card-body pt-2">
            <h1 class="mb-4">More</h1>
            <div class="d-block d-sm-none mb-4">
              <img data-bs-toggle="modal" data-bs-target="#mapModal" src="<?php echo base_url('assets/images/map-mobile.jpeg') ?>" alt="map" class="img-fluid">
            </div>
            <div class="d-none d-sm-block mb-4">
              <img data-bs-toggle="modal" data-bs-target="#mapModal" src="<?php echo base_url('assets/images/map-desktop.jpeg') ?>" alt="map" class="img-fluid">
            </div>
            <div class="row">
              <div class="col-6 text-center">
                <a href="https://api.whatsapp.com/send/?phone=5215592256952&text&app_absent=0" target="_blank">
                  <img src="<?php echo base_url('assets/images/icon-whatsapp.png') ?>" alt="whatsapp" width="64">
                </a>
                <p><small>Get personalized attention through Whatsapp</small></p>
              </div>
              <div class="col-6 text-center">
                <a href="https://open.spotify.com/playlist/2sYqT44fcKLdIA0pBYnqE9?si=45KwhssmS1-zfW8Wnaqy4g" target="_blank">
                  <img src="<?php echo base_url('assets/images/icon-spotify.png') ?>" alt="spotify" width="64">
                </a>
                <p><small>Win win<br>Rock You!</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<div class="modal fade" id="mapModal" tabindex="-1" aria-labelledby="mapModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="d-block d-sm-none mb-4">
          <img src="<?php echo base_url('assets/images/map-mobile.jpeg') ?>" alt="map" class="img-fluid">
        </div>
        <div class="d-none d-sm-block mb-4">
          <img src="<?php echo base_url('assets/images/map-desktop.jpeg') ?>" alt="map" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</div>