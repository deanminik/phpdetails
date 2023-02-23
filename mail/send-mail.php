<?php

$inputName = $_POST['inputName'];
$inputLastname = $_POST['inputLastname'];
$inputMail = $_POST['inputMail'];
$inputPhone = $_POST['inputPhone'];
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: $inputName $inputLastname <$inputMail>\r\n";

$sucess = mail($inputMail, $inputName, $headers);

if ($sucess) {
    echo "Mail sent";
} else {
    echo "Mail not sent";
}
