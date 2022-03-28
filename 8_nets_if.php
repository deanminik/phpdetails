<?php
if ($_POST) {

    $valueA = $_POST['valueA'];
    $valueB = $_POST['valueB'];

    // && -> and
    // || -> or

    if (($valueA == $valueB)) {
        echo "The number A is greater than the number B";
        if ($valueB == 4) {
            echo "Yes is 4";
        }
        if ($valueB == 5) {
            echo "Yes is 5";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nest if</title>
</head>

<body>
    <form action="8_nest_if.php" method="post">
        Value A
        <input type="text" name="valueA" class="text">
        Value B
        <input type="text" name="valueB" class="text">
        <input type="submit" class="submit" value="Calculate">
    </form>
</body>

</html>