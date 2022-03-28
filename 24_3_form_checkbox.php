<?php

$txtName = "";
$rdgLanguage = "";

$chkphp = "";
$chkhtml = "";
$chkcss = "";

$anime = "";

$txtComment = "";

if ($_POST) {
    // isset($_POST)?: If this data arrive, do this...  assing, adding the action after ?, if not do this after :
    $txtName = (isset($_POST['txtName'])) ? $_POST['txtName'] : "";
    $rdgLanguage = (isset($_POST['language'])) ? $_POST['language'] : "";

    $chkphp = (isset($_POST['chkphp']) == "yes") ? "checked" : "";
    $chkhtml = (isset($_POST['chkhtml']) == "yes") ? "checked" : "";
    $chkcss = (isset($_POST['chkcss']) == "yes") ? "checked" : "";

    $anime = (isset($_POST['anime'])) ?  $_POST['anime'] : "";

    $txtComment = (isset($_POST['txtComment'])) ?  $_POST['txtComment'] : "";


    //check if there is data 
    //print_r($_POST);
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
        <br />
        <strong>Your are learning :</strong>
        <?php echo ($chkphp == "checked") ? "PHP" : ""; ?>
        <?php echo ($chkhtml == "checked") ? "HTML" : ""; ?>
        <?php echo ($chkcss == "checked") ? "CSS" : ""; ?>
        <br />
        <strong>Your anime is :</strong>
        <?php echo $anime; ?>
        <br />
        <strong>Your comment is :</strong>
        <?php echo $txtComment; ?>

    <?php } ?>

    <form action="24_3_form_checkbox.php" method="post">
        Name:<br />
        <input type="text" name="txtName" id="" value="<?php echo $txtName ?>">
        <br />
        Do you want? allow only one option<br />

        <br />php: <input type="radio" <?php echo ($rdgLanguage == "php") ? "checked" : ""; ?> name="language" value="php" id=""><br />
        <br />html:<input type="radio" <?php echo ($rdgLanguage == "html") ? "checked" : ""; ?> name="language" value="html" id=""><br />
        <br />css:<input type="radio" <?php echo ($rdgLanguage == "html") ? "checked" : ""; ?> name="language" value="css" id=""><br />

        Learning... allow multmiple options <br />
        <br />php: <input type="checkbox" <?php echo $chkphp; ?> name="chkphp" value="yes" id=""><br />
        <br />html:<input type="checkbox" <?php echo $chkhtml; ?> name="chkhtml" value="yes" id=""><br />
        <br />css:<input type="checkbox" <?php echo $chkcss; ?> name="chkcss" value="yes" id=""><br />


        Which anime do you like ? using select
        <select name="anime" id="">
            <option value="">Nothing</option>
            <option value="naruto" <?php echo ($anime == "naruto") ? "selected" : ""; ?>>Naruto</option>
            <option value="db" <?php echo ($anime == "db") ? "selected" : ""; ?>>Dragon ball</option>
            <option value="sodiac" <?php echo ($anime == "sodiac") ? "selected" : ""; ?>>sodiac</option>
        </select>
        <br />

        Do you ha ve a comment?  <br />
         <textarea name="txtComment" id="" cols="30" rows="10"></textarea>
         <br />
        <input type="submit" value="Send Data">

    </form>
</body>

</html>