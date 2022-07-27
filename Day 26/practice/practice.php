<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP</title>
</head>
<body>
    <div class="container">
        <h1>Hello I am learning PHP.</h1>
    </div>
    
    
   

        //     $var1 = 20;
        //     $var2 = 23;
        //     echo $var1;
        //     echo $var2;

        //     $txt = "W3Schools.com";
        //     echo "<br>I love". $txt. "!";


    //Concatenation

        //     $variable1 = 23;
        //     $variable2 = 45;
        //     $variable3 = $variable1 + $variable2;
        //     echo"This is " . $variable1 . " + " . $variable2 . " = " . $variable3;


    //Operator


    //Arithmatic Operator
            
        //     $num1 = 46;
        //     $num2 =23;

        //     $sum = $num1 + $num2;
        //     $sub = $num1 - $num2;
        //     $mul = $num1 * $num2;
        //     $div = $num1 / $num2;
        //     $mod = $num1 % $num2;

        //     echo "Summation : ";
        //     echo $sum;
        //     echo "<br>";
        //     echo "Substruction : ";
        //     echo $sub;
        //     echo "<br>";
        //     echo "Multiplication : ";
        //     echo $mul;
        //     echo "<br>";
        //     echo "Division : ";
        //     echo $div;
        //     echo "<br>";
        //     echo "Modulas : ";
        //     echo $mod;
        //     echo "<br>";
            

    //Assign Operator
            
        //     $variable1 = 20;
        //     $variable1 += 2; 
        //     echo $variable1;
        //     echo "<br>";

        //     $variable1 = 20;
        //     $variable1 -= 2; 
        //     echo $variable1;
        //     echo "<br>";

        //     $variable1 = 20;
        //     $variable1 *= 2; 
        //     echo $variable1;
        //     echo "<br>";

        //     $variable1 = 20;
        //     $variable1 /= 2; 
        //     echo $variable1;
        //     echo "<br>";
            

    //Comaprison Operator
        //     echo " The Statement is : ";
        //     echo var_dump(1==4) ;
        //     echo "<br>";

        //     echo " The Statement is : ";
        //     echo var_dump(1<4) ;
        //     echo "<br>";

        //     echo " The Statement is : ";
        //     echo var_dump(1<=4) ;
        //     echo "<br>";

        //     echo " The Statement is : ";
        //     echo var_dump(1>=4) ;
        //     echo "<br>";

        //     echo " The Statement is : ";
        //     echo var_dump(1>4) ;
        //     echo "<br>";

        //     echo " The Statement is : ";
        //     echo var_dump(1!=4) ;
        //     echo "<br>";

    // Increment and Decrement Operator

        //     $variable1 = 23;
        //     echo $variable1 ++;
        //     echo "<br>";
        //     echo ++$variable1;
        //     echo "<br>";
        //     echo $variable1 --;
        //     echo "<br>";
        //     echo --$variable1;
        //     echo "<br>";

    //Data Types
            
    ?>

</body>
</html> -->



<?php

// class result{

//         function __construct($marks){

//                 if($marks >= 80 && $marks <= 100){
//                         echo "Grade : A+ <br>";
//                         echo "Point : 5.00 <br>";
//                 }
//                 else if($marks >= 70 && $marks <= 79){
//                         echo "Grade : A <br>";
//                         echo "Point : 4.00 <br>";
//                 }
//                 else if($marks >= 60 && $marks <= 69){
//                         echo "Grade : A- <br>";
//                         echo "Point : 3.50 <br>";
//                 }
//                 else if($marks >= 50 && $marks <= 59){
//                         echo "Grade : B <br>";
//                         echo "Point : 3.00 <br>";
//                 }
//                 else if($marks >= 40 && $marks <= 49){
//                         echo "Grade : C <br>";
//                         echo "Point : 2.00 <br>";
//                 }
//                 else if($marks >= 33 && $marks <= 39){
//                         echo "Grade : D <br>";
//                         echo "Point : 1.00 <br>";
//                 }
//                 else if($marks >= 0 && $marks <= 32){
//                         echo "Grade : F <br>";
//                         echo "Point : 0.00 <br>";
//                 }
//                 else{
//                         echo "Invalid Marks";
//                 }
        
//         }
        
// }



class result{
        
        function resultChecker($marks){

                if($marks >= 80 && $marks <= 100){
                        echo "Grade : A+ <br>";
                        echo "Point : 5.00 <br>";
                }
                else if($marks >= 70 && $marks <= 79){
                        echo "Grade : A <br>";
                        echo "Point : 4.00 <br>";
                }
                else if($marks >= 60 && $marks <= 69){
                        echo "Grade : A- <br>";
                        echo "Point : 3.50 <br>";
                }
                else if($marks >= 50 && $marks <= 59){
                        echo "Grade : B <br>";
                        echo "Point : 3.00 <br>";
                }
                else if($marks >= 40 && $marks <= 49){
                        echo "Grade : C <br>";
                        echo "Point : 2.00 <br>";
                }
                else if($marks >= 33 && $marks <= 39){
                        echo "Grade : D <br>";
                        echo "Point : 1.00 <br>";
                }
                else if($marks >= 0 && $marks <= 32){
                        echo "Grade : F <br>";
                        echo "Point : 0.00 <br>";
                }
                else{
                        echo "Invalid Marks";
                }
        
        }
        
}




?>