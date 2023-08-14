<?php
    // include_once("config/Config.php");
    // session_start();
    class Users extends Config{
        
        public function check_admin($login_data){
            // print_r($login_data);
            $admin_email = $login_data["email"];
            $admin_password =md5($login_data["password"]);

            // echo $admin_email;
            // echo $admin_password;
            
            $query = "SELECT * FROM `tbl_users` WHERE `email` = '$admin_email' AND `password` = '$admin_password'";
            $result = $this->connection->query($query);
            // $row = mysqli_fetch_assoc($result);
            // print_r($row);
            // print_r(mysqli_num_rows($result));

            if (mysqli_num_rows($result)) {
                
                $_SESSION["admin_email"] = $admin_email;
                $_SESSION["admin_password"] = $admin_password;
                echo "success";
                header("Location: dashboard.php ");
                echo "<pre>";
                print_r($_SESSION);

            }else{
                $_SESSION["alert_msg"] ="The email or password you entered is incorrect.";
                // session_destroy();
                // print_r($_SESSION["alert_msg"]);
                // echo "failour";

            }
        }

    }


?>