<?php

include 'php/config.php';

$errorMsg = "";

// NAME
if (empty($_POST["name"])) {
    if($lang == 'ru')
        $errorMSG = "Заполните Имя! ";
    else
        $errorMSG = "Name is required! ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["mail"])) {
    if($lang == 'ru')
        $errorMSG = "Заполните Email ";
    else
        $errorMSG .= "Email is required ";
} else {
    $mail = $_POST["mail"];
}

// MESSAGE
if (empty($_POST["message"])) {
    if($lang == 'ru')
        $errorMSG = "Заполите сообщение ";
    else
        $errorMSG .= "Message is required ";
} else {
    $message = nl2br($_POST['message']);
}

$Subject = "Сообщение с e-mayer.ru";

// prepare email body text
$Body = '<b>Имя:</b> '.$name.' <br><b>E-mail</b> '.$mail.' <p>' .$message.'</p>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'From: ' . $mail . "\r\n";

// send email
$success = mail($email, $Subject, $Body, $headers);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>