<?php

$con = new mysqli("localhost","root","","aai");
if(isset($_POST["submit"])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $status = $_POST["status"];
    $submit = $_POST["submit"];

    $insert = $con->query("INSERT INTO tbl_student(name,email,status)
            VALUES('$name','$email','$status')");
}

function showData(){
    $show = $con-> query("SELECT *FROM ");
}







?>

