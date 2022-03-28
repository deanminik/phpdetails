<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    //Beginning small comment

    /* Beginning large comment
    with multiple instructions
    */

    ?>

    <?php
    //Is there a deliver?

    if ($_POST) {

        $name = $_POST['textNombre'];
        $lastname = $_POST['textlastname'];

        echo "<h1>This is the name $name $lastname</h1>";
    }



    ?>

    <H4>Hello form section</H4>
    <form action="1_post.php" method="post" name="">
        <label for="textNombre">Name:</label>
        <input type="text" name="textNombre" value="">
        <br />
        <label for="textLastname">Lastname:</label>
        <input type="text" name="textlastname" id="">
        <input type="submit" value="Send">
    </form>

</body>

</html>