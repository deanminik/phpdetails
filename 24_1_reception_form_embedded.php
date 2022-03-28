<?php

$txtName = "";
if ($_POST) {
    // isset($_POST)?: If this data arrive do this...  assing, adding the action after ?, if not do this after :
    $txtName = (isset($_POST['txtName'])) ? $_POST['txtName'] : "";
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
        
        <strong>Hello</strong>: <?php echo $txtName . "<br />"; ?>

    <?php } ?>

    <form action="24_1_reception_form_embedded.php" method="post">
        <input type="text" name="txtName" id="" value="<?php echo$txtName?>">
        <input type="submit" value="Send Data">

    </form>
</body>

</html>