<?php

use portfolio\model\CommentManager;
use portfolio\model\UserForm;



// View de l'admin
function showAdmin()
{
    require("./public/php/view/backend/adminView.php");
}
// View de l'admin des commentaire
function showAdminComment()
{
    $commentManager = new CommentManager();
    $reportedComment = $commentManager->getReportCommment();
    require('./public/php/view/backend/adminComment.php');
}

// View admin formulaire de contact
function showAdminContact()
{
    $userForm = new UserForm();
    $valueForm = $userForm->selectForm();
    require('./public/php/view/backend/adminContact.php');
}

// Supprimer les commentaires
function deleteComment($commentId)
{
    $commentManager = new CommentManager();
    $commentManager->deleteValues($commentId);
    showAdminComment();
    echo "<script>alert(\"Commentaire supprimer\")</script>";
}

function deleteForm($id)
{
    $userForm = new UserForm();
    $userForm->deleteForm($id);
    showAdminContact();
    echo "<script>alert(\"Formulaire supprimer\")</script>";
}
