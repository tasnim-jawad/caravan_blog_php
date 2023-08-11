<?php
    session_start();
    $view = $_SESSION["master"] = "add_category" ;
    require("./master_template.php")
?>