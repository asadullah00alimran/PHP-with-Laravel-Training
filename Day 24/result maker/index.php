<?php

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
            if($total >= 0 && $total <= 100){
                echo $total;
                return $total;
            }
            else{
                echo "Invalid Marks";
                return $total;
            }
            
            
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
                echo "Invalid Grade !!!!!!";
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
                echo "Invalid Points !!!!!!";
            }
            
        }

    function validation(){
        
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Maker</title>
</head>
<body>
    <form action="" method="post">
        <table border="1">
            <tr>
                <th>Sub Code</th>
                <th>Sub Name</th>
                <th>CQ Marks</th>
                <th>Practical Marks</th>
                <th>MCQ Marks</th>
                <th>Total Marks</th>
                <th>Grade</th>
                <th>Point</th>
                <th>Get</th>
            </tr>
            <tr>
                <td>1001</td>
                <td>Ban 1st</td>
                <td><input type="text" name ="cq" value = "<?php if(isset($_POST["get"]))echo $cq?>"></td>
                <td><input type="text" name ="mcq" value = "<?php if(isset($_POST["get"]))echo $mcq?>"></td>
                <td><input type="text" name ="practical" value = "<?php if(isset($_POST["get"]))echo $practical?>"></td>
                <td><input type="text" name ="total" 
                    value = "<?php if(isset($_POST["total"]))$total = totalNumber($cq,$mcq,$practical)?>">
                </td>
                <td><input type="text" name ="grade" 
                    value = "<?php if(isset($_POST["get"]))grade($total) ?>">
                </td>
                <td><input type="text" name ="point" 
                    value = "<?php if(isset($_POST["get"]))point($total) ?>"></td>
                <td><button type="submit" name ="get">Get</button></td>
            </tr>
            <!-- <tr>
                <td>1002</td>
                <td>Ban 2nd</td>
                <td><input type="text" name ="cq"></td>
                <td><input type="text" name ="mcq"></td>
                <td><input type="text" name ="practical"></td>
                <td><input type="text" name ="total" 
                    value = "<?php if(isset($_POST["total"]))$total = totalNumber($cq,$mcq,$practical)?>">
                </td>
                <td><input type="text" name ="grade" 
                    value = "<?php if(isset($_POST["grade"]))grade($total) ?>">
                </td>
                <td><input type="text" name ="point" 
                    value = "<?php if(isset($_POST["point"]))point($total) ?>"></td>
                <td><button type="submit" name ="get">Get</button></td>
            </tr> -->
        </table>
    </form>
</body>
</html>

