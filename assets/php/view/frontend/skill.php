<?php $title = 'Projet P5'; ?>
<?php ob_start(); ?>

<h1>Compétence</h1>

<p>VOIR AVEC MARINE POUR LOGO FUN ICI POUR MONTRER LES BARRES DE COMPETENCE</p>

<p>HTML</p>
<div class="progress">
  <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
</div>
<p>CSS</p>
<div class="progress">
  <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
</div>
<p>JavaScript</p>
<div class="progress">
  <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
</div>
<p>PHP</p>
<div class="progress">
  <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
</div>

<h2 id="h2Skill">UN AVIS ? UN TRUC A DIRE ? RIEN A DIRE ? C'EST ICI, JUSTE EN DESSOUS</h2>
<div class="formComment">
    <form action="" method="post">
        <div>
            <label for="author">Auteur</label><br />
            <input type="text" id="author" name="author" />
        </div>
        <div>
            <label for="comment">Commentaire</label><br />
            <textarea id="comment" name="comment"></textarea>
        </div> <br>
        <div>
            <button type="submit" class="btn btn-success">Envoyer</button>
        </div>
    </form>





<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>