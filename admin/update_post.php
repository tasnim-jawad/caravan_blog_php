<?php
    session_start();
    $view =$_SESSION['master'] = 'update_post';
    require ("./master_template.php");
?>