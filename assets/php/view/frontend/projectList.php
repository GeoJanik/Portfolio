<?php $title = 'Projet P5'; ?>
<?php ob_start(); ?>


<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
      aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
        preserveAspectRatio="xMidYMid slice" focusable="false">
        <rect width="100%" height="100%" fill="#777" /></svg>

      <div class="container">
        <div class="carousel-caption text-start">
          <h1>Example headline.</h1>
          <p>Some representative placeholder content for the first slide of the carousel.</p>
          <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
        preserveAspectRatio="xMidYMid slice" focusable="false">
        <rect width="100%" height="100%" fill="#777" /></svg>

      <div class="container">
        <div class="carousel-caption">
          <h1>Another example headline.</h1>
          <p>Some representative placeholder content for the second slide of the carousel.</p>
          <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
        preserveAspectRatio="xMidYMid slice" focusable="false">
        <rect width="100%" height="100%" fill="#777" /></svg>

      <div class="container">
        <div class="carousel-caption text-end">
          <h1>One more for good measure.</h1>
          <p>Some representative placeholder content for the third slide of this carousel.</p>
          <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="assets/public/img/P1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Intégrez une maquette</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
          content. This content is a little bit longer.</p>
          <a href="index.php?action=projectP1" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="assets/public/img/P2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Créez un site WordPress</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
          content. This content is a little bit longer.</p>
          <a href="index.php?action=projectP2" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="assets/public/img/P3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Carte intéractive de vélos</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
          content.</p>
          <a href="index.php?action=projectP3" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="assets/public/img/P4.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Créez un blog</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
          content. This content is a little bit longer.</p>
          <a href="index.php?action=projectP4" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>



<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>