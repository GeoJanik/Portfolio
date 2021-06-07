<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <title><?= $title ?></title>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link href="public/css/style.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/b0fe328ff4.js" crossorigin="anonymous"></script>

</head>

<body>

  <?php
  if (empty($_SESSION['id'])) {
    $conected = false;
  } else {
    $conected = true;
  }
  ?>

  <header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php?action=projectList">Geoffrey JANIK</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php?action=skill">Compétence</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?action=formation">Formation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?action=contact">Contact</a>
            </li>
            <?php
            if (!$conected) {
            ?>
              <li class="nav-item">
                <a class="nav-link" href="index.php?action=login">Connexion</a>
              </li>
            <?php
            }
            ?>

            <?php
            if ($conected) {
            ?>
              <li class="nav-item">
                <a class="nav-link" href="index.php?action=logOut">Déconnexion</a>
              </li>
            <?php
            }
            ?>
            <?php
            if ($conected) {
            ?>
              <li class="nav-item">
                <a class="nav-link" href="index.php?action=admin">Admin</a>
              </li>
            <?php
            }
            ?>

          </ul>
        </div>
      </div>
    </nav>
  </header>



  <?= $content ?>


  <div id="scroll_to_top">
    <a href="#top"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
  </div>

  <footer class="footer">
    <div class="container">
      <span class="textFooter"><a href="index.php?action=infos">Qui suis-je ?</a></span>
      <?php
      if (isset($_SESSION['id']) and isset($_SESSION['pseudo'])) {
        echo '<span class="textFooter">Vous êtes connécté à votre compte ' . $_SESSION['pseudo'] . '</span>';
      } else {
        echo   '<span class="textFooter">Aucun utilisateur de connécté</span>';
      }
      ?>
    </div>

  </footer>

</body>

</html>