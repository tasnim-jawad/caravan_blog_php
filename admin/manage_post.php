<?php
    session_start();
    $view =$_SESSION['master'] = 'manage_post';
    require ("./master_template.php");
?>