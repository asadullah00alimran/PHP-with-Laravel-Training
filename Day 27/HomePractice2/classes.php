<?php

class RegDatA{

    private $db_con;
    
    function __construct(){
        $this->db_con = new mysqli("localhost","root","","aai");
    }

    function insertData(){

        $name = $_POST["name"];
        $email = $_POST["email"];
        $phpne = $_POST["phone"];
        $gender = $_POST["gender"];
        $password = $_POST["password"];
        $conpassword = $_POST["conpassword"];

        $result = $this->db_con->query("INSERT INTO tbl_register(name,email,phone,gender,password,conpassword)
            VALUES('$name','$email','$phone','$gender','$password','$conpassword')");

        

    }
}

?>