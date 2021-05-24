<?php

require('./assets/php/controller/frontend.php');

try {
    if (isset($_GET['action'])) {
        if($_GET['action'] == 'projectList') {
            projectList();
        }

    } else {
        projectList();
    }
} 
catch(Exception $e) {
    echo 'erreur : ' .$e->getMessage();
}
