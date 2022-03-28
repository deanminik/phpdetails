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

$sql = "SELECT photosID, photosName, photosRoute FROM photos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["photosID"]. " - Name: " . $row["photosName"]. " Route: " . $row["photosRoute"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
