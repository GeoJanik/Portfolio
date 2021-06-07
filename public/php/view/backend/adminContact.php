<div class="container">

  <?php $title = 'Projet P5'; ?>
  <h1>ICI POUR GERER LES FORMULAIRE DE CONTACT</h1>


  <?php
  while ($selectForms = $valueForm->fetch()) {
  ?>
    <div class="card text-center">
      <div class="card-header">
        <p>Destinataire: <?= htmlspecialchars($selectForms['firstName']) ?> <?= htmlspecialchars($selectForms['secondName']) ?></p>
        <p>Obejet de la demande: <?= htmlspecialchars($selectForms['objectForm']) ?></p>

      </div>
      <div class="card-body">
        <h5 class="card-title">MESSAGE DU DESTINATAIRE</h5>
        <p class="card-text"><?= htmlspecialchars($selectForms['comment']) ?></p>
        <a href="index.php?action=deleteForm&amp;id=<?= $selectForms['id'] ?> " class="btn btn-primary">Supprimer</a>
      </div>
      <div class="card-footer text-muted">
        <?= $selectForms['dateFormFr'] ?>
      </div>
    </div>
  <?php
  }
  ?>

  <div class="container">