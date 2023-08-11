<?php
    session_start();
    $view =$_SESSION['master'] = 'manage_category';
    require ("./master_template.php");
?>