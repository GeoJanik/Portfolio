<div class="container">

    <h3>UN COMMENTAIRE ? UN AVIS ? RIEN A DIRE ? FAIT LE SAVOIR JUSTE EN DESSOUS</h3>

    <div class="formComment">
        <form action="index.php?action=addComment&amp;idProject=<?= $idProject ?>" method="post">
            <div>
                <label for="author">Auteur :</label><br />
                <input type="text" id="author" name="author" />
            </div>
            <div>
                <label for="comment">Commentaire :</label><br />
                <textarea id="comment" name="comment"></textarea>
            </div> <br>
            <div>
                <button type="submit" class="btn btn-success">Envoyer</button>
            </div>
        </form>

        <?php
        while ($comment = $comments->fetch()) {
        ?>
            <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
            <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
            <a href="index.php?action=commentReport&amp;commentId=<?= $comment['id'] ?>&amp;idProject=<?= $idProject ?>">
                <button type="button" class="btn btn-danger">Signaler</button></a>

        <?php
        }
        ?>

    </div>

</div>