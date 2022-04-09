<main class="container-fluid bg-landing pt-4">
  <div class="row">
    <div class="col-md-4 offset-md-4">
      <div class="card">
        <div class="card-body">
          <div class="row mb-5">
            <div class="col-3 pt-3">
              <img src="<?php echo base_url('assets/images/arrow-right.png') ?>" alt="arrow right">
            </div>
            <div class="col-9">
              <a href="<?php echo base_url('schedule') ?>" class="btn btn-link btn-link-landing-index">
                Agenda
              </a>
            </div>
          </div>
          <div class="row mb-5">
            <div class="col-3 pt-3">
              <img src="<?php echo base_url('assets/images/arrow-right.png') ?>" alt="arrow right">
            </div>
            <div class="col-9">
              <a href="<?php echo base_url('experiences') ?>" class="btn btn-link btn-link-landing-index">
                Experiencia del día
              </a>
            </div>
          </div>
          <div class="row mb-5">
            <div class="col-3 pt-3">
              <img src="<?php echo base_url('assets/images/arrow-right.png') ?>" alt="arrow right">
            </div>
            <div class="col-9">
              <a href="<?php echo base_url('more') ?>" class="btn btn-link btn-link-landing-index">
                Más info
              </a>
            </div>
          </div>
          <div class="extra-material-area-landing">
            <div class="row">
              <div class="col-3">
                <img src="<?php echo base_url('assets/images/arrow-right.png') ?>" alt="arrow right">
              </div>
              <div class="col-9">
                <a href="<?php echo base_url('extras') ?>" class="link-extra-material">
                  Material<br>descargable
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="eventModalLabel">Ancla el evento a tu teléfono</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Conoce como añadir todo el sitio a la pantalla de inicio de tu teléfono y ten toda la información al instante:</p>
        <p>iOS</p>
        <ol>
          <li>Lorem ipsum dolor</li>
          <li>Lorem ipsum dolor</li>
          <li>Lorem ipsum dolor</li>
        </ol>
        <p>Android</p>
        <ol>
          <li>Lorem ipsum dolor</li>
          <li>Lorem ipsum dolor</li>
          <li>Lorem ipsum dolor</li>
        </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          Cerrar
        </button>
      </div>
    </div>
  </div>
</div>