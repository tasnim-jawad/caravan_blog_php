<?php
    if (!file_exists('config/Config.php')) {
        include "../config/Config.php";
    }
    
    class Categories extends Config{

        
        public function add_categories($data){
            print_r($data);
            $category_name =$data["category_name"];
            $category_description =$data["category_description"];
            echo $category_name."<br>";
            echo $category_description;

            $query ="INSERT INTO `tbl_category` (`id` ,`category_name` , `category_description`) VALUES (NULL , '$category_name' , '$category_description')";
            $result = $this->connection->query($query);
            
            if($result){
                echo "category added successfully";
            }
            
        } 
    }


?>