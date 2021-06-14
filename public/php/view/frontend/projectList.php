<?php $title = 'Portfolio'; ?>

<!-- SECTION SLIDER -->

<div id="slider">
  <img id="imgSlider" alt="slider" src="assets/img/slider1.jpg" />
</div>

<!-- FIN SECTION SLIDER -->
<div class="container">
  <h1 id="titlePl">Mes projets</h1>

  <div class="separateur">
    <div class="trait"></div>
  </div>


  <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card">
        <img src="assets/img/P1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Intégrez une maquette</h5>
          <p class="card-text">La directrice de l’agence vous informe que le site est
            vieillissant. Elle me propose de m'occuper de la refonte du site de l'agence.</p>
          <a href="index.php?action=showProject&amp;idProject=1" class="btn btn-primary">Voir le projet</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="assets/img/P2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Créez un site WordPress</h5>
          <p class="card-text">l'office du tourisme de la ville d'Ireki, au Pôle Nord ! Ils souhaitent
            un site web à l'image de la ville pour attirer des touristes et informer sur les activités
            proposées.</p>
          <a href="index.php?action=showProject&amp;idProject=2" class="btn btn-primary">Voir le projet</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="assets/img/P3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Carte intéractive de vélos</h5>
          <p class="card-text">Je dois développer une page de type "Single page Application" simulant la 
            réservation de vélos dans une ville.</p>
          <a href="index.php?action=showProject&amp;idProject=3" class="btn btn-primary">Voir le projet</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="assets/img/P4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Créez un blog</h5>
          <p class="card-text">Développer une application de blog simple en PHP et avec une base de données 
            MySQL. Elle doit fournir une interface frontend et une interface backend</p>
          <a href="index.php?action=showProject&amp;idProject=4" class="btn btn-primary">Voir le projet</a>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="public/js/Slider.js"></script>