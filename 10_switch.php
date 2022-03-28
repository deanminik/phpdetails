<?php
if ($_POST) {

    $button = $_POST['btnValue'];
    switch ($button) {
        case 1:
            echo "The user press the button 1";
        break; // stop here

        case 2:
            echo "The user press the button 2";
        break; // stop here

        case 3:
            echo "The user press the button 3";
        break; // stop here

    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch</title>
</head>

<body>
    <form action="10_switch.php" method="post">
        <input type="submit" name="btnValue" value="1">
        <br />
        <input type="submit" name="btnValue" value="2">
        <br />
        <input type="submit" name="btnValue" value="3">
    </form>
</body>

</html>