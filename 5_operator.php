<?php
if ($_POST) {

    $valueA = $_POST['valueA'];
    $valueB = $_POST['valueB'];

    $sum = $valueA + $valueB;
    echo $sum;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>

<body>
    <form action="5_operator.php" method="post">
        Value A
        <input type="text" name="valueA" class="text">
        Value B
        <input type="text" name="valueB" class="text">
        <input type="submit" class="submit" value="Calculate">
    </form>
</body>

</html>