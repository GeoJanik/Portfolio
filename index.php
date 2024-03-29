<?php
    ob_start();

require('./public/php/controller/frontend.php');
require('./public/php/controller/backend.php');
session_start();

try {
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
            } else {
                echo "<script>alert(\"Remplir tout les champs svp\")
                    </script>";
                showProject($_GET['idProject']);
            }
        } else if ($_GET['action'] == 'commentReport') {
            if (!empty($_GET['commentId'])) {
                reportComment($_GET['commentId'], $_GET['idProject']);
            }
        } else if ($_GET['action'] == 'loginSubmit') {
            loginSubmit($_POST['pseudo'], $_POST['pass']);
        } else if ($_GET['action'] == 'deleteComment') {
            if (!empty($_GET['commentId'])) {
                deleteComment($_GET['commentId']);
            }
        } else if ($_GET['action'] == 'logOut') {
            logOut();
        } else if ($_GET['action'] == 'form') {
            if (!empty($_POST['firstName']) && !empty($_POST['secondName']) && (!empty($_POST['email']) && !empty($_POST['comment']))) {
                form($_POST['firstName'], $_POST['secondName'], $_POST['email'], $_POST['objectForm'], $_POST['comment']);
            }
        } else if ($_GET['action'] == 'deleteForm') {
            if (!empty($_GET['id'])) {
                deleteForm($_GET['id']);
            }
        } else if ($_GET['action'] == 'infos') {
            infosView();
        }
    } else {
        projectList();
    }
    $content = ob_get_clean();
    require('./public/php/view/frontend/template.php');
} catch (Exception $e) {
    echo 'erreur : ' . $e->getMessage();
}
