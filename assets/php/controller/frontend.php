<?php

use portfolio\model\CommentManager;
require('./assets/php/model/CommentManager.php');


function showProject($idProject) {
    if($idProject == 1) {
        require('./assets/php/view/frontend/projectP1.php');
    } else if($idProject == 2) {
        require('./assets/php/view/frontend/projectP2.php');    
    } else if($idProject == 3) {
        require('./assets/php/view/frontend/projectP3.php');   
    } else if ($idProject == 4) {
        require('./assets/php/view/frontend/projectP4.php');    
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
