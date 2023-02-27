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

    include '../model/handle_object.php';
    try {
        //code...
        $myconnection = new PDO('mysql:host=127.0.0.1:3406,dbname=BDBlog', 'dev', 'secret');
        $myconnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $handle_object = new Handle_object($myconnection);
        $table_blog = $handle_object->getContentByDate();
        if (empty($table_blog)) {
            echo "There is no data in the table";
        } else {
            foreach ($table_blog as $row) {
                echo "<h1>" . $row->get_title() . "</h1>";
                echo "<p>" . $row->get_comment() . "</p>";
                echo "<img src='../images/" . $row->get_image() . "' width='200px'>";
                echo "<p>" . $row->get_date() . "</p>";
                echo "<hr>";
            }
        }
    } catch (\Throwable $th) {
        die("Error: " . $th->getMessage());
    }

    ?>
   <a href="form.php">Back to the form </a> 
</body>

</html>