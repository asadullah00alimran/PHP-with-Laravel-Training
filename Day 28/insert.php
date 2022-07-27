<?php

class imran{

    
    private $con;

    function databaseConnection(){
        $this->con = new mysqli("localhost","root","","aai");
    }

    function insertData(){
        
        if(isset($_POST["submit"])){

            $name = $_POST["name"];
            $email = $_POST["email"];
            $status = $_POST["status"];
            $submit = $_POST["submit"];

            $insert = $this->con->query("INSERT INTO tbl_student(name,email,status)
                    VALUES('$name','$email','$status')");

            header("location: index.php");
        }
    }

    // function showData(){
    //     $delete = $con->query("SELECT *FROM tbl_student WHERE ");
    // }


}

?>