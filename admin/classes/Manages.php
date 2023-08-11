<?php
    if (!file_exists('config/Config.php')) {
        include "../config/Config.php";
    }

    class Manages extends Config{

        public function show_categories(){
            // $category_name =$data["category_name"];
            // $category_name =$data["category_description"];

            $query ="SELECT * FROM `tbl_category` ";
            $result = $this->connection->query($query);
            return $result;
        } 
    }




?>