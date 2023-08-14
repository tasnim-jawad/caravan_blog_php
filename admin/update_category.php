<?php
    session_start();
    $view =$_SESSION['master'] = 'update_category';
    require ("./master_template.php");
?>