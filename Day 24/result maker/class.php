<?php

class Bangla{
    
    if(isset($_POST["get"])){
        $cq = $_POST["cq"];
        $mcq = $_POST["mcq"];
        $practical = $_POST["practical"];
        $total = $_POST["total"];
        $grade = $_POST["grade"];
        $point = $_POST["point"];
    }


    function totalNumber($cq,$mcq,$practical){
        $total = $cq + $mcq + $practical;
        echo $total;
        return $total;
    }


    function grade($total){
        if($total >= 80 && $total <= 100){
            echo "A+";
        }
        else if($total >= 70 && $total <= 79){
            echo "A";
        }
        else if($total >= 60 && $total <= 69){
            echo "A-";
        }
        else if($total >= 50 && $total <= 59){
            echo "B";
        }
        else if($total >= 40 && $total <= 49){
            echo "C";
        }
        else if($total >= 33 && $total <= 39){
            echo "D";
        }
        else if($total >= 0 && $total <= 32){
            echo "F";
        }
        else{
            echo "Invalid Marks !!!!!!";
        }
        
    }


    function point($total){
        if($total >= 80 && $total <= 100){
            echo 5.00;
        }
        else if($total >= 70 && $total <= 79){
            echo 4.00;
        }
        else if($total >= 60 && $total <= 69){
            echo 3.50;
        }
        else if($total >= 50 && $total <= 59){
            echo 3.00;
        }
        else if($total >= 40 && $total <= 49){
            echo 2.00;
        }
        else if($total >= 33 && $total <= 39){
            echo 1.00;
        }
        else if($total >= 0 && $total <= 32){
            echo 0.00;
        }
        else{
            echo "Invalid Marks !!!!!!";
        }
        
    }

}

?>