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
    // Interact with the views and models, he is the dealer between them
    //we add data in our database; 

    include_once '../model/blog_object.php';
    include_once '../model/handle_object.php';


    try {
        
        $myconnection = new PDO('mysql:host=127.0.0.1:3406;dbname=BDBlog', 'dev', 'secret');
        $myconnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



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
            echo "File uploaded successfully <br/>";
            if (isset($_FILES['inputFile']['name']) && ($_FILES['inputFile']['error'] == UPLOAD_ERR_OK)) {
                $destino_de_ruta = '../images/';
                move_uploaded_file($_FILES['inputFile']['tmp_name'], $destino_de_ruta . $_FILES['inputFile']['name']);
                echo "File moved to: " . $destino_de_ruta . $_FILES['inputFile']['name'] . "<br/>";
            } else {
                echo "File not uploaded";
            }
        }

        $handleObject = new Handle_object($myconnection);

        $blog = new Blog_object();
        // htmlentities(addslashes -> avoid sql injection
        $blog->set_title(htmlentities(addslashes($_POST['inputTitle'])));
        $blog->set_comment(htmlentities(addslashes($_POST['inputComment'])));
        $blog->set_image($_FILES['inputFile']['name']);
        $blog->set_date(date("Y-m-d H:i:s"));

        $handleObject->insertContent($blog);
        echo "<br/>Content inserted successfully <br/>";
    } catch (\Throwable $th) {
        die("Error: " . $th->getMessage());
    }

    ?>
</body>

</html>