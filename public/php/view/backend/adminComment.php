<div class="container">

    <?php $title = 'Projet P5'; ?>

    <h1>Ici les mauvais commentaires</h1>
    <?php
    while ($reportComment = $reportedComment->fetch()) {
    ?>
        <div class="card text-center">
            <div class="card-bodyAdmin">
                <p id="userComment">L'utilisateur <strong><?= htmlspecialchars($reportComment['author']) ?></strong></p>
                <p>A été signalé pour le commentaire suivant :</p>
                <p><?= nl2br(htmlspecialchars($reportComment['comment'])) ?></p>
                <a class="btn btn-danger" href="index.php?action=deleteComment&amp;commentId=<?= $reportComment['id'] ?>">
                    Supprimer le commentaire</a> <br><br>
            </div>
        </div>
    <?php
    }
    ?>

</div>