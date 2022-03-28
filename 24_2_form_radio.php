
<?php

$txtName = "";
$rdgLanguage = "";
if ($_POST) {
    // isset($_POST)?: If this data arrive do this...  assing, adding the action after ?, if not do this after :
    $txtName = (isset($_POST['txtName'])) ? $_POST['txtName'] : "";
    $rdgLanguage = (isset($_POST['language'])) ? $_POST['language'] : "";

   // print_r($_POST);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form reception</title>
</head>

<body>

    <?php if ($_POST) { ?>
        
        <strong>Hello :</strong>: <?php echo $txtName . "<br />"; ?>
        <br />
        <strong>Your language is </strong>: <?php echo $rdgLanguage . "<br />"; ?>

    <?php } ?>

    <form action="24_2_form_radio.php" method="post">
        Name:<br />
        <input type="text" name="txtName" id="" value="<?php echo$txtName?>">
        <br />
        Do you want?<br />
        <br />php: <input type="radio" <?php echo ($rdgLanguage == "php")?"checked":""; ?> name="language" value="php" id=""><br />
        <br />html:<input type="radio" <?php echo ($rdgLanguage == "html")?"checked":""; ?> name="language" value="html" id=""><br />
        <br />css:<input type="radio" <?php echo ($rdgLanguage == "html")?"checked":""; ?> name="language" value="css" id=""><br />
        <input type="submit" value="Send Data">

    </form>
</body>

</html>