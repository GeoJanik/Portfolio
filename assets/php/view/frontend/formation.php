<?php $title = 'Projet P5'; ?>
<?php ob_start(); ?>


<h1>MES FORMATION</h1>
<p>VOIR ICONE ICI AVEC MARINE</p>
<p>OPENCLASSROOMS</p>
<p>BAC</p>
<p></p>

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