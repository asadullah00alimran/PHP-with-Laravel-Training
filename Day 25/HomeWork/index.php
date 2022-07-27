<?php 

// $a = [20,30,40,50,60,70,"imran",100];
// echo count($a);
// print_r($a);
// var_dump($a);
// echo array_sum($a);

class class1{

    public $num1 = 50;
    public $num2 = 20;

    function add(){

        $sum = $this->num1 + $this->num2;
        return $sum;
    }
}

class class2 extends class1{

    
    function sub(){
        $minus = $this->num1 - $this->num2;
        return $minus;
    }

    // public $subsum = $minus * $sum;
}

// $class1 = new class1();
$class2 = new class2();

echo $class2->add();
echo "<br>";
echo $class2->sub();
echo "<br>";


// echo $class2->subsum;




?>
