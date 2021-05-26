<?php $title = 'Projet P5'; ?>
<?php ob_start(); ?>

<h1>ICI POUR GERER LES FORMULAIRE DE CONTACT</h1>

<?php $content = ob_get_clean(); ?>
<?php require('./assets/php/view/frontend/template.php'); ?>