<?php
 
use \portfolio\model\CommentManager;

function projectList() {
    require('./assets/php/view/frontend/projectList.php');
}
function showProjectP1(){
    require('./assets/php/view/frontend/projectP1.php');
}
function showProjectP2(){
    require('./assets/php/view/frontend/projectP2.php');
}
function showProjectP3(){
    require('./assets/php/view/frontend/projectP3.php');
}
function showProjectP4(){
    require('./assets/php/view/frontend/projectP4.php');
}
function showSkill(){
    require('./assets/php/view/frontend/skill.php');
}
function showFormation() {
    require('./assets/php/view/frontend/formation.php');
}
function showContact(){
    require('./assets/php/view/frontend/contact.php');
}
function showLogin(){
    require('./assets/php/view/frontend/connexion.php');
} 
function addComment(){
$commentManager = new CommentManager();
$affectedLines = $commentManager->postComment($author, $comment);
if ($affectedLines === false) {
    throw new Exception('Impossible d\'ajouter le commentaire !');
} else {
    header('./assets/php/view/frontend/projectP1.php');
}

}