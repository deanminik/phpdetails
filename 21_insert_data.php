<?php



$dbServerName = "localhost:3306";
$dbUsername = "usuarioprueba";
$dbPassword = "pass1234";
$dbName = "prueba";

// create connection
$conn = new mysqli($dbServerName, $dbUsername, $dbPassword, $dbName);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"."<br/>";

$sql = "INSERT INTO photos (photosName,photosRoute)VALUES('Lucas','photo_2.jpg')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


