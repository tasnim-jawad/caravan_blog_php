<?php

    class Config{

        public $connection;

        public function __construct(){
            $this->connection = new Mysqli("localhost","root","","caravan");
            
            if($this->connection){
                // echo "ok";
            }

        }

        
    }

?>