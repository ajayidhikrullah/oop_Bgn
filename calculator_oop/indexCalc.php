<?php
    decalre (strict_types = 1);
    include 'includes/class-autoload.inc.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="includes/calc.inc.php" method="post">
        <h3>OOP calculator</h3>
            <input type="number" name="num1" placeholder = "input First number to calculate">
            <select name="oper">
                <option value="add">Addition</option>
                <option value="sub">Subtraction</option>
                <option value="div">Division</option>
                <option value="mul">Multiplication</option>
            </select>

            <input type="number" name="num2" placeholder="second number to calculate">
            <button type="submit" name = "submit">Calculate</button>
    </form>

</body>
</html>