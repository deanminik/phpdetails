<?php
//We receive the data from the image 
$image_name = $_FILES['inputImage']['name'];

$type_image = $_FILES['inputImage']['type'];

$size_image = $_FILES['inputImage']['size'];
$sizeInKb = floor($size_image / 1024);

echo $sizeInKb . ' KB <br>';
echo $type_image . ' <br>';

if ($type_image == 'image/jpeg' || $type_image || 'image/png') {
    if ($sizeInKb < 1024) {
        if ($type_image != 'image/gif') {
            //Place to store the image
            $directory_destination = $_SERVER['DOCUMENT_ROOT'] . '/UPLOAD_IMAGES/images/';

            //Moving the image from the temporal directory to the directory selected
            move_uploaded_file($_FILES['inputImage']['tmp_name'], $directory_destination . $image_name);
            echo 'The image is in the correct format and size';
        } else {
            echo "The image must be in format JPG or PNG";
        }
    } else {
        echo "The image must be less than 1MB";
    }
} else {
    exit("The image must be in format JPG, PNG or GIF the app stopped, reload");
}

require("./connection_db.php");

$stmt = $conn->prepare('UPDATE PRODUCTOS SET FOTO = :imageName WHERE CÓDIGOARTÍCULO = "AR01"');

$stmt->bindParam(':imageName', $image_name);
$stmt->execute();

echo "Success";

$conn = null;
