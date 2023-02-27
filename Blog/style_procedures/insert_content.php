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

    $myconnection = mysqli_connect("localhost:3406", "dev", "secret", "BDBlog");

    if (!$myconnection) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit();
    }

    if ($_FILES['inputFile']['error']) {
        switch ($_FILES['inputFile']['error']) {
            case 0: // UPLOAD_ERR_OK
                echo "There is no error, the file uploaded with success";
                break;
            case 1: // UPLOAD_ERR_INI_SIZE
                echo "The uploaded file exceeds the upload_max_filesize directive in php.ini";
                break;
            case 2: // UPLOAD_ERR_FORM_SIZE
                echo "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form";
                break;
            case 3: // UPLOAD_ERR_PARTIAL
                echo "The uploaded file was only partially uploaded";
                break;
            case 4: // UPLOAD_ERR_NO_FILE
                echo "No file was uploaded";
                break;
            case 6: // UPLOAD_ERR_NO_TMP_DIR
                echo "Missing a temporary folder";
                break;
            case 7: // UPLOAD_ERR_CANT_WRITE
                echo "Failed to write file to disk";
                break;
        }
    } else {
        echo "File uploaded successfully";
        if (isset($_FILES['inputFile']['name']) && ($_FILES['inputFile']['error'] == UPLOAD_ERR_OK)) {
            $destino_de_ruta = 'images/';
            move_uploaded_file($_FILES['inputFile']['tmp_name'], $destino_de_ruta . $_FILES['inputFile']['name']);
            echo "File moved to: " . $destino_de_ruta . $_FILES['inputFile']['name'];
        } else {
            echo "File not uploaded";
        }
    }

    $title = $_POST['inputTitle'];
    $comment = $_POST['inputComment'];
    $image = $_FILES['inputFile']['name'];
    $date = date("Y-m-d H:i:s");

    $query = "INSERT INTO content (title_content, date_content, comment_content, image_content) VALUES ('" . $title . "', '" . $date . "', '" . $comment . "', '" . $image . "')";
    $result = mysqli_query($myconnection, $query);

    //Close the connection 
    mysqli_close($myconnection);
    echo "<br/>Connection closed<br/><br/>";
    ?>
</body>

</html>