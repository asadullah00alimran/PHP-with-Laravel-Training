<?php 

// $a = [20,30,40,50,60,70,"imran",100];
// echo count($a);
// print_r($a);
// var_dump($a);
// echo array_sum($a);

// class class1{

//     public $num1 = 50;
//     public $num2 = 50;
//     // public $plus;
//     // public $minus;
//     // public $subsum;

//     function addition(){

//         $this->plus = $this->num1 + $this->num2;
//         return $this->plus;
//     }
//     function minus(){
//         $this->minus = $this->num1 - $this->num2;
//         return $this->minus;
//     }

//     function sumsub(){
//         $this->subsum = $this->minus * $this->plus;
//         return $this->subsum;
//     }
    
// }

// $class1 = new class1();

// echo $class1->addition();
// echo "<br>";
// echo $class1->minus();
// echo "<br>";
// echo $class1->sumsub();


//$connection = new mysqli("localhost","root","","aai");
// if($connection){
//     echo "Database connected Successfully";
// }
// else{
//     echo "Faild to connect with Database";
// }

// $data = "INSERT INTO tbl_person(name,email,status)VALUES('Imran','imran@gmail.com',1)";
// $insert = $connection->query("$data");
// // $insert = $connection->query("INSERT INTO tbl_person(name,email,status)VALUES('Al','al@gmail.com',1)");

// if($insert){
//     echo "Your Data is stored in the Database";
// }
// else{
//     echo "Your Data is failed to store in the Database";
// }


include "practice.php";

// $result = new result(70);
$result = new result();
$result->resultChecker(69);











?>