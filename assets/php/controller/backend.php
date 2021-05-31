<?php

use portfolio\model\CommentManager;

// View de l'admin
function showAdmin(){
    require("./assets/php/view/backend/adminView.php");
}
// View de l'admin des commentaire
function showAdminComment(){
    $commentManager = new CommentManager();
    $reportedComment = $commentManager->getReportCommment();
    require('./assets/php/view/backend/adminComment.php');
}

// View admin formulaire de contact
function showAdminContact(){
require("./assets/php/view/backend/adminContact.php");
}

// Supprimer les commentaires
function deleteComment($commentId) {
    $commentManager = new CommentManager();
    $commentManager->deleteValues($commentId);
    showAdminComment();
    echo "<script>alert(\"Commentaire supprimer\")
                    </script>";
}