<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show blog</title>
</head>

<body>
    <?php
    $myconnection = mysqli_connect("localhost:3406", "dev", "secret", "BDBlog");

    if (!$myconnection) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit();
    }
    $query = "SELECT * FROM content ORDER BY date_content DESC";

    if($result = mysqli_query($myconnection, $query)){
        while($row = mysqli_fetch_assoc($result)){
            echo "<h1>" . $row['title_content'] . "</h1>";
            echo "<p>" . $row['comment_content'] . "</p>";
            echo "<img src='images/" . $row['image_content'] . "' width='200px'>";
            echo "<p>" . $row['date_content'] . "</p>";
            echo "<hr>";
        }
    }

    ?>
</body>

</html>