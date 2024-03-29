<div class="container">

  <?php $title = 'Projet P5'; ?>
  <h1>Ici pour gérer les formulaires de contact</h1>

  <?php
  while ($selectForms = $valueForm->fetch()) {
  ?>
    <div class="card text-center cardContact">
      <div class="card-header cardHeaderContact">
        <p>Destinataire: <?= htmlspecialchars($selectForms['firstName']) ?> <?= htmlspecialchars($selectForms['secondName']) ?></p>
        <p>Objet de la demande: <?= htmlspecialchars($selectForms['objectForm']) ?></p>

      </div>
      <div class="card-body">
        <h5 class="card-title">MESSAGE DU DESTINATAIRE</h5>
        <p class="card-text"><?= htmlspecialchars($selectForms['comment']) ?></p>
        <a href="index.php?action=deleteForm&amp;id=<?= $selectForms['id'] ?> " class="btn btn-primary btnDeleteContact">Supprimer</a>
      </div>
      <div class="card-footer text-muted">
        <?= $selectForms['dateFormFr'] ?>
      </div>
    </div>
  <?php
  }
  ?>

</div>