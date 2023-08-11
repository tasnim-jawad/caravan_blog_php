<?php
    session_start();
    $view = $_SESSION["master"] = "add_post" ;
    require("./master_template.php")
?>