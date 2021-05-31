<?php

require('./assets/php/controller/frontend.php');
require('./assets/php/controller/backend.php');




try {
    ob_start();
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'projectList') {
            projectList();
        } else if ($_GET['action'] == 'showProject') {
            showProject($_GET['idProject']);
        } else if ($_GET['action'] == 'skill') {
            showSkill();
        } else if ($_GET['action'] == 'formation') {
            showFormation();
        } else if ($_GET['action'] == 'contact') {
            showContact();
        } else if ($_GET['action'] == 'login') {
            showLogin();
        } else if ($_GET['action'] == 'admin') {
            showAdmin();
        } else if ($_GET['action'] == 'adminComment') {
            showAdminComment();
        } else if ($_GET['action'] == 'adminContact') {
            showAdminContact();
        } else if ($_GET['action'] == 'addComment') {
            if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                $idProject = $_GET['idProject'];
                addComment($idProject, $_POST['author'], $_POST['comment']);
                showProject($idProject);
            }
        } else if ($_GET['action'] == 'commentReport') {
            if (!empty($_GET['commentId'])) {
                reportComment($_GET['commentId'], $_GET['idProject']);
            }
        } else if ($_GET['action'] == 'deleteComment') {
            if (!empty($_GET['commentId'])) {
                deleteComment($_GET['commentId']);
            }
        } 
    } else {
        projectList();
    }
    $content = ob_get_clean();
    require('./assets/php/view/frontend/template.php');
} catch (Exception $e) {
    echo 'erreur : ' . $e->getMessage();
}
