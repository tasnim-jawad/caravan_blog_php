<?php
    session_start();
    $view = $_SESSION["master"] = "dashboard" ;
    require("./master_template.php");
    

    // $admin_email = $_SESSION["admin_email"];
    // echo "<pre>";
    // print_r($_SESSION);
    // echo $admin_email;


?>