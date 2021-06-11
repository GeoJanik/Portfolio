<h1>Les mauvais commentaires</h1>

<div class="container containerAdminComment">

    <?php $title = 'Projet P5'; ?>


    <?php
    while ($reportComment = $reportedComment->fetch()) {
    ?>
        <div class="card text-center cardCommentAdmin">
            <div class="card-bodyAdmin">
                <p id="userComment">L'utilisateur <strong><?= htmlspecialchars($reportComment['author']) ?></strong></p>
                <p>A été signalé pour le commentaire suivant :</p>
                <p><?= nl2br(htmlspecialchars($reportComment['comment'])) ?></p>
                <a class="btn btn-danger btnDangerComment" href="index.php?action=deleteComment&amp;commentId=<?= $reportComment['id'] ?>">
                    Supprimer le commentaire</a> <br><br>
            </div>
        </div>
    <?php
    }
    ?>

</div>