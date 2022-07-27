<!DOCTYPE html>
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
    <?php
    
   

            $var1 = 20;
            $var2 = 23;
            echo $var1;
            echo $var2;

            $txt = "W3Schools.com";
            echo "<br>I love". $txt. "!";


    //Concatenation

            $variable1 = 23;
            $variable2 = 45;
            $variable3 = $variable1 + $variable2;
            echo"This is " . $variable1 . " + " . $variable2 . " = " . $variable3;


    //Operator


    //Arithmatic Operator
            
            $num1 = 46;
            $num2 =23;

            $sum = $num1 + $num2;
            $sub = $num1 - $num2;
            $mul = $num1 * $num2;
            $div = $num1 / $num2;
            $mod = $num1 % $num2;

            echo "Summation : ";
            echo $sum;
            echo "<br>";
            echo "Substruction : ";
            echo $sub;
            echo "<br>";
            echo "Multiplication : ";
            echo $mul;
            echo "<br>";
            echo "Division : ";
            echo $div;
            echo "<br>";
            echo "Modulas : ";
            echo $mod;
            echo "<br>";
            

    //Assign Operator
            
            $variable1 = 20;
            $variable1 += 2; 
            echo $variable1;
            echo "<br>";

            $variable1 = 20;
            $variable1 -= 2; 
            echo $variable1;
            echo "<br>";

            $variable1 = 20;
            $variable1 *= 2; 
            echo $variable1;
            echo "<br>";

            $variable1 = 20;
            $variable1 /= 2; 
            echo $variable1;
            echo "<br>";
            

    //Comaprison Operator
            echo " The Statement is : ";
            echo var_dump(1==4) ;
            echo "<br>";

            echo " The Statement is : ";
            echo var_dump(1<4) ;
            echo "<br>";

            echo " The Statement is : ";
            echo var_dump(1<=4) ;
            echo "<br>";

            echo " The Statement is : ";
            echo var_dump(1>=4) ;
            echo "<br>";

            echo " The Statement is : ";
            echo var_dump(1>4) ;
            echo "<br>";

            echo " The Statement is : ";
            echo var_dump(1!=4) ;
            echo "<br>";

    // Increment and Decrement Operator

            $variable1 = 23;
            echo $variable1 ++;
            echo "<br>";
            echo ++$variable1;
            echo "<br>";
            echo $variable1 --;
            echo "<br>";
            echo --$variable1;
            echo "<br>";

    //Data Types
            
    ?>

</body>
</html>
