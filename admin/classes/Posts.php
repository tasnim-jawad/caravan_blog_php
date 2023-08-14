<?php
    class Posts extends Config{

        public function add_post($data){
            $Post_title =$data["Post_title"];
            $Post_content =$data["Post_content"];
            $Post_summery =$data["Post_summery"];
            $Post_category =$data["Post_category"];

            $Post_img_name =$_FILES["Post_img"]["name"];
            $Post_img_tmp_name =$_FILES["Post_img"]["tmp_name"];

            $Post_author =$data["Post_author"];
            $Post_status =$data["Post_status"];
            
            $query ="INSERT INTO `tbl_posts`(`Post_title`, `Post_content`, `Post_summery`, `Post_category`, `Post_img`, `Post_author`, `Post_date`, `Post_status`) VALUES (?,?,?,?,?,?,now(),?)";
            $result = $this->connection->prepare($query);
            
            $result->bind_param("ssssssi",$Post_title,$Post_content,$Post_summery,$Post_category,$Post_img_name,$Post_author,$Post_status);
            
            if($result->execute()){
                move_uploaded_file($Post_img_tmp_name,"images/post_images/$Post_img_name");
                header("location: add_post.php");
            }
            $result->close();
        }

        public function show_post(){

            $query ="SELECT * FROM `tbl_posts`";
            $result = $this->connection->query($query);
            return $result;
        } 

        public function delete_post($id){
            $query = "DELETE FROM `tbl_posts` WHERE `Post_id` = '$id'";
            $result =$this->connection->query($query);
            if($result){
                echo "delete successful";
            }
        }

        public function edit_post($id){
            $query ="SELECT * FROM `tbl_posts` WHERE `Post_id` = '$id'";
            $result =$this->connection->query($query);
            if($result){
                // echo "grap the id " . $id;
                // print_r($result);
                return $result;
            }
        }
        public function update_post($data){
            $Post_id =$data["Post_id"];
            $Post_title =$data["Post_title"];
            $Post_content =$data["Post_content"];
            $Post_summery =$data["Post_summery"];
            $Post_category =$data["Post_category"];

            $Post_img_name =$_FILES["Post_img"]["name"];
            $Post_img_tmp_name =$_FILES["Post_img"]["tmp_name"];

            $Post_author =$data["Post_author"];
            $Post_status =$data["Post_status"];


            $query ="UPDATE `tbl_posts` SET `Post_title`= ?,`Post_content`=?,`Post_summery`=?, `Post_category`=?,`Post_img`=?,`Post_author`=?,`Post_date`= now(),`Post_status`=? WHERE `Post_id`='$Post_id'";
            $result = $this->connection->prepare($query);
            
            $result->bind_param("ssssssi",$Post_title,$Post_content,$Post_summery,$Post_category,$Post_img_name,$Post_author,$Post_status);
            
            if($result->execute()){
                move_uploaded_file($Post_img_tmp_name,"images/post_images/$Post_img_name");
                header("location: manage_post.php");
            }
            $result->close();
        }
    }
?>