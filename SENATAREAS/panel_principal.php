<?php
include 'includes/header.php';



if ($_SESSION['rol'] == 'instructor') {

    require __DIR__.'/includes/panel_instructor.php';
} else {
    require __DIR__.'/includes/panel_aprendiz.php';
}

?>