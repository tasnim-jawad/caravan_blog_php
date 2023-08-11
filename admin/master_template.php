<?php
    include_once("./classes/Users.php");
    $user = new Users();
    
    if (!isset($_SESSION["admin_email"])) {
        header("location: index.php" );
    }

    if (isset($_GET["admin_logout"])) {
        // echo "<pre>";
        // print_r($_GET["admin_logout"]);
        if ($_GET["admin_logout"] == "logout") {
            session_destroy();
            header("Location: index.php");

        }

    }
?>


<!-- Template Mastering  -->


    <!-- Header included  -->
    <?php include_once("./includes/header.php") ?>

        <!-- nav included  -->
        <?php include_once("./includes/nav.php") ?>

        <div id="layoutSidenav">

            <!-- sidenav included  -->
            <?php include_once("./includes/sidenav.php") ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        
                    <!-- loading category page view -->
                        <?php
                            if(isset($_SESSION["master"])){
                                if($view == "dashboard"){
                                    require("./views/dashboard_view.php");
                                }elseif($view == "add_category"){
                                    require("./views/add_cat_view.php");
                                }elseif($view == "manage_category"){
                                    require("./views/manage_cat_view.php");
                                }elseif($view == "add_post"){
                                    require("./views/add_post_view.php");
                                }elseif($view == "manage_post"){
                                    require("./views/manage_post_view.php");
                                }
                            }
                            
                        ?>
                        
                    </div>
                </main>
                <!-- footer included  -->
                <?php include_once("./includes/footer.php") ?>
                
            </div>
        </div>
        <!-- All script link included  -->
        <?php include_once("./includes/script.php") ?>
    </body>
</html>
