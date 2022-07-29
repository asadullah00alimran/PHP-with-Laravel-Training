<?php

    class Imran{

        private $connection;

        function __construct(){
            $this->connection = new mysqli("localhost","root","","aai");
        }

    
        function insertData($data){
                
            $name = $data["name"];    
            $email = $data["email"];
            $status = $data["status"];
            if(empty($name)){
                echo '<span class="alert alert-danger">Name is empty</span>';
            }
            if(empty($email)){
                echo '<span class="alert alert-danger">Email is empty</span>';
            }
            else{  
                $result = $this->connection->query("INSERT INTO tbl_person(name,email,status)VALUES('$name','$email','$status')");
                if($result){
                    echo '<span class="alert alert-success">Data Inserted Successfully</span>';
                }
                else{
                    echo '<span class="alert alert-success">Data Inserted Failed</span>';
                }
            }

        }

        function showData(){

            $result = $this->connection->query("SELECT *FROM tbl_person");
            return $result;
        }

        function deleteData(){

            $id = $_POST["userid"];
            $result = $this->connection->query("DELETE FROM tbl_person WHERE id = '$id'");
           
        }
    }


?>
