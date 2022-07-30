<?php

class AttendenceSystem{

    private $db_con;
    
    function __construct(){
        $this->db_con = new mysqli("localhost","root","","aai");
    }

    function insertData($data){
        $name = $data["name"];
        $id = $data["id"];
        $email = $data["email"];
        $phone = $data["phone"];
        $gender = $data["gender"];
        $container = $this->db_con->query("INSERT INTO tbl_student_data(name,id,email,phone,gender)VALUES('$name','$id','$email','$phone','$gender')");
        if($container){
            echo "Data Inserted SuccessfullY";
        }
        else{
            echo "Failed to Insert Data";
        }

    }

















}

?>