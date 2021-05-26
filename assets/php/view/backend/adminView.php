<?php $title = 'Projet P5'; ?>
<?php ob_start(); ?>

<H1>Bienvenu dans la partie caché de ce site ... L'ADMINISTRATION !!!!!!</H1> <br>

<p>IMAGE MARINE</p>
<div class="row espacement">
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="..." alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Gerer les commentaires</h5>
                    <p class="card-text">C'est ici, pour supprimer les villains commentaires</p>
                    <a href="index.php?action=adminComment" class="btn btn-outline-warning">GO GO GO !</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="..." alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Gerer les formulaires de contact</h5>
                    <p class="card-text">C'est ici pour gerer les demandes de contact!</p>
                    <a href="index.php?action=adminContact" class="btn btn-outline-warning">GO GO GO !</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('./assets/php/view/frontend/template.php'); ?>