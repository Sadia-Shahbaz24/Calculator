<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="calculator">
        <form action="calculator.php" method="post">
            <h1 style="text-align: center;">Calculator</h1>
            <input type="text" name="num1" placeholder="Enter first number">
            <select name="operator">
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>
            <input type="text" name="num2" placeholder="Enter second number">
            <button type="submit" name="submit">Calculate</button>
        </form>
        <?php 
        if(isset($_POST['submit'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['operator'];

            switch($operator){
                case 'add':
                    $result = $num1 + $num2;
                    break;
                case 'subtract':
                    $result = $num1 - $num2;
                    break;
                case 'multiply':
                    $result = $num1 * $num2;
                    break;
                case 'divide':
                    if($num2 == 0){
                        $result = "Cannot divide by zero";
                    } else {
                        $result = $num1 / $num2;
                    }
                    break;
                default:
                    $result = "Invalid operator";
            }
            echo "<p>Result: $result</p>";
        }
        ?>
    </div>
</body>
</html>
