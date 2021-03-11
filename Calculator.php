<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Calcualtor</title>
</head>
<body>
    <form method="POST">
                <input type="text" name="num1">
                <input type="text" name="num2">
                <select name="operation" id="">
                    <option value="add">+</option>
                    <option value="sub">-</option>
                    <option value="mul">x</option>
                    <option value="div">/</option>
                </select>
                <input type="submit" name="submit" value="Go">
    </form>
    <h1>
    <?php
            if(isset($_POST['submit'])){
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operation = $_POST['operation'];
                // echo $num1." ".$num2;
                switch($operation){
                    case "add": $sum = $num1 + $num2;
                    echo  "The Addition of" ." ".$sum;
                    break;
                    case "sub": $sub = $num1 - $num2;
                    echo  "The Subtract of" ." ".$sub;
                    break;
                    case "mul": $mul = $num1 * $num2;
                    echo  "The Multiply of" ." ".$mul;
                    break;
                    case "div": $div = $num1 / $num2;
                    echo  "The Divide of" ." ".$div;
                    break;
                }
            }
    
    ?>
    </h1>

</body>
</html>