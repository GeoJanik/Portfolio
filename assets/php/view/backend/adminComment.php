<?php $title = 'Projet P5'; ?>
<?php ob_start(); ?>

<h1>Ici les mauvais commentaires</h1>

<!-- <div class="card text-center">
    <div class="card-bodyAdmin">
        <p id="userComment">L'utilisateur <strong><?= htmlspecialchars($reportedComment['author']) ?></strong></p>
        <p>A été signalé pour le commentaire suivant :</p>
        <p><?= nl2br(htmlspecialchars($reportedComment['comment'])) ?></p>
        <a class="btn btn-danger" href="index.php?action=deleteComment&amp;comment_id=<?= $reportedComment['id']?>">
        Supprimer le commentaire</a> <br><br>
    </div>
</div> -->

<?php $content = ob_get_clean(); ?>
<?php require('./assets/php/view/frontend/template.php'); ?>