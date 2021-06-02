<?php

use portfolio\model\CommentManager;
use portfolio\model\UserManager;
use portfolio\model\UserForm;

require('./assets/php/model/CommentManager.php');
require('./assets/php/model/UserManager.php');
require('./assets/php/model/UserForm.php');

// Affichage du projet selectionné
function showProject($idProject)
{
    if ($idProject == 1) {
        require('./assets/php/view/frontend/projectP1.php');
        $commentManager = new CommentManager();
        $comments = $commentManager->getComments($idProject);
    } else if ($idProject == 2) {
        require('./assets/php/view/frontend/projectP2.php');
        $commentManager = new CommentManager();
        $comments = $commentManager->getComments($idProject);
    } else if ($idProject == 3) {
        require('./assets/php/view/frontend/projectP3.php');
        $commentManager = new CommentManager();
        $comments = $commentManager->getComments($idProject);
    } else if ($idProject == 4) {
        require('./assets/php/view/frontend/projectP4.php');
        $commentManager = new CommentManager();
        $comments = $commentManager->getComments($idProject);
    }
    require('./assets/php/view/frontend/showComment.php');
}

function projectList()
{
    require('./assets/php/view/frontend/projectList.php');
}
function showSkill()
{
    require('./assets/php/view/frontend/skill.php');
}
function showFormation()
{
    require('./assets/php/view/frontend/formation.php');
}
function showContact()
{
    require('./assets/php/view/frontend/contact.php');
}
function showLogin()
{
    require('./assets/php/view/frontend/connexion.php');
}

// Ajouter un commentaire
function addComment($idProject, $author, $comment)
{
    $commentManager = new CommentManager();
    $affectedLines = $commentManager->insertComment($idProject, $author, $comment);
    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    } else {
        header('./assets/php/view/frontend/projectP1.php');
    }
}

// Report un commentaire
function reportComment($commentId, $idProject)
{
    $report = new CommentManager();
    $reportComment = $report->updateReport($commentId);
    showProject($idProject);
    echo "<script>alert(\"Commentaire repporté\")</script>";
}

// Connexion
function loginSubmit($pseudo, $pass)
{

    // Recup de l'utilisateur 
    $userManager = new UserManager();
    $user = $userManager->login($pseudo);
    $isPassWordCorrect = password_verify($pass, $user['pass']);

    // Si on trouve rien dans la bdd
    if (!$user) {
        echo "<script>alert(\"Nom d'utilisateur incorect\")</script>";
        showLogin();
    }
    // Sinon, si un user existe et si le pass est correcte
    elseif ($isPassWordCorrect) {
        session_start();
        $_SESSION['id'] = $user['id'];
        $_SESSION['pseudo'] = $pseudo;
        header('Location: index.php');

    }
    // Sinon on affiche une alerte d'erreur
    else {
        echo "<script>alert(\"Mot de passe incorrect\")</script>";
        showLogin();
    }
}

// Deconnexion
function logOut(){
    $_SESSION = array();
    session_destroy();
    header('Location: index.php');
}


function form($firstName, $secondName, $email, $comment) {
    $userForm = new UserForm();
    $form = $userForm->insertForm($firstName, $secondName, $email, $comment);
    echo "<script>alert(\"Votre demande est enregistré\")</script>";
    header('Location: index.php');

}