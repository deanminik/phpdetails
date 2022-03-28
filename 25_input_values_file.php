<?php

if ($_POST) {
    print_r($_POST);
    echo "<br />";
    print_r($_FILES);
    /*
        Array ( [send] => Send data )
        Array ( [file] => Array ( [name] => uwp1768879.jpeg [type] => image/jpeg [tmp_name] => /tmp/phpLN0wG2 [error] => 0 [size] => 102366 ) )
        */

    // this part works only with the input files 
    echo "<br />";
    //access to our array 
    print_r($_FILES['file']['name']);
    /*
    important: to save the file, add permissions to the directory. To be able to read and write
    */
    //_________________Move_this______________,__copy_here________                
    move_uploaded_file($_FILES['file']['tmp_name'],$_FILES['file']['name']);
}

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
    <form action="25_input_values_file.php" enctype="multipart/form-data" method="post">
        Image:
        <br />
        <input type="file" name="file" id="">
        <br />
        <input type="submit" name="send" value="Send data">

    </form>
</body>

</html>