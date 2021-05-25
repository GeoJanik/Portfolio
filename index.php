<?php

require('./assets/php/controller/frontend.php');

try {
    if (isset($_GET['action'])) {
        if($_GET['action'] == 'projectList') {
            projectList();
        } else if ($_GET['action'] == 'projectP1') {
            showProjectP1();
        } else if ($_GET['action'] == 'projectP2') {
            showProjectP2();
        } else if ($_GET['action'] == 'projectP3') {
            showProjectP3();
        } else if ($_GET['action'] == 'projectP4') {
            showProjectP4();
        }

    } else {
        projectList();
    }
} 
catch(Exception $e) {
    echo 'erreur : ' .$e->getMessage();
}
