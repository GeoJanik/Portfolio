<?php $title = 'Projet P5'; ?>


<h1>CONNEXION</h1>

<div class="logConnexion">
  <h2>Connexion à votre compte</h2>
  <form method="post" action="index.php?action=loginSubmit">
    <div class="form-group w-75">
      <label for="pseudo" class="form-label">Pseudo</label>
      <input type="text" class="form-control" id="pseudo" name="pseudo">
    </div>
    <div class="form-group w-75">
      <label for="pass" class="form-label">Mot de passe</label>
      <input type="password" class="form-control" id="pass" name="pass">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Connexion</button>
  </form>
</div>