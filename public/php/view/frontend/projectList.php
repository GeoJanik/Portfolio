<?php $title = 'Portfolio'; ?>

 <!-- SECTION SLIDER -->
 <div id="sectionSlider">
    <div id="slider">
      <img id="imgSlider" alt="slider" src="assets/img/velo.png" />
    </div>
    <div class="timer">
      <div id="previous"><i class="far fa-arrow-alt-circle-left"></i> </div>
      <div id="play"><i class="far  fa-play-circle"></i></div>
      <div id="break"><i class="far fa-pause-circle"></i></div>
      <div id="next"><i class="far fa-arrow-alt-circle-right"></i></div>
    </div>
  </div>
  <!-- FIN SECTION SLIDER -->


<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="assets/img/P1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Intégrez une maquette</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
          content. This content is a little bit longer.</p>
        <a href="index.php?action=showProject&amp;idProject=1" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="assets/img/P2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Créez un site WordPress</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
          content. This content is a little bit longer.</p>
        <a href="index.php?action=showProject&amp;idProject=2" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="assets/img/P3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Carte intéractive de vélos</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
          content.</p>
        <a href="index.php?action=showProject&amp;idProject=3" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="assets/img/P4.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Créez un blog</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
          content. This content is a little bit longer.</p>
        <a href="index.php?action=showProject&amp;idProject=4" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>

<script src="public/js/Slider.js"></script>