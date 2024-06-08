<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="calculator.css">
</head>
<body>
    <div class="calculator">
        <h1>CALCULATOR</h1>
    <form action="" method="POST">
            <input type="text" name="num1" placeholder="Enter first number">
            <div class="">
            <select name="operator">
                <option value="add">Add (+)</option>
                <option value="subtract">Subtract (-)</option>
                <option value="multiply">Multiply (*)</option>
                <option value="divide">Divide (/)</option>
                <option value="exponent">Exponent (^)</option>
                <option value="sqrt">Square Root (√)</option>
                <option value="modulus">Modulus (%)</option>
                <option value="logarithm">log</option>
            </select>
            <div>
            <input type="text" name="num2" placeholder="Enter second number">

            <button type="submit" name="submit">Calculate</button>
        </form>
        <?php
        if(isset($_POST['submit'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['operator'];

            switch($operator){
                case "add":
                    $result = $num1 + $num2;
                    break;
                case "subtract":
                    $result = $num1 - $num2;
                    break;
                case "multiply":
                    $result = $num1 * $num2;
                    break;
                case "divide":
                    if($num2 == 0){
                        echo "Error! Cannot divide by zero.";
                    } else {
                        $result = $num1 / $num2;
                    }
                    break;
                case "exponent":
                    $result = pow($num1, $num2);
                    break;
                case "sqrt":
                    $result = sqrt($num1);
                    break;
                case "modulus":
                    $result = $num1 % $num2;
                    break;
                case "logarithm":
                    $result = log($num1, $num2);
                    break;
                default:
                    echo "Invalid operator.";
            }

            echo '<input type="text" class="result" value="Result = ' . $result . '" readonly>';
        }
        ?>
    </div>
</body>
</html>
