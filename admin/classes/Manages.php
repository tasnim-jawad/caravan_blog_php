<?php
    // if (!file_exists('config/Config.php')) {
    //     include "../config/Config.php";
    // }

    class Manages extends Config{

        public function show_categories(){

            $query ="SELECT * FROM `tbl_category`";
            $result = $this->connection->query($query);
            return $result;
        } 

        public function delete_category($id){
            $query = "DELETE FROM `tbl_category` WHERE `id` = '$id'";
            $result =$this->connection->query($query);
            if($result){
                // echo "delete successful";
            }
        }

        public function edit_category($id){
            $query ="SELECT * FROM `tbl_category` WHERE `id` = '$id'";
            $result =$this->connection->query($query);
            if($result){
                // echo "grap the id " . $id;
                return $result;
            }
        }
        public function update_category($data){
            $id = $data["id"];
            $category_name = $data["category_name"];
            $category_description = $data["category_description"];
            $query ="UPDATE `tbl_category` SET `id`='$id' , `category_name`='$category_name' , `category_description`='$category_description' WHERE `id`= '$id'";
            $result =$this->connection->query($query);
            if ($result) {
                // Start output buffering
                // ob_start();
                header("Location: manage_category.php");
                ob_end_flush();
            }
        }
    }




?>