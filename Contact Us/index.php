<?php

include('contact.html');

if (isset($_POST['contactName']) and isset($_POST['contactEmail']) and isset($_POST['contactMessage'])) {
    $name = $_POST['contactName'];
    $email = $_POST['contactEmail'];
    $message = $_POST['contactMessage'];

//    $error = "<p class=\"errorP\">ERROR!</p>";

//    $link = mysqli_connect("localhost", "root", "", "contactUsers");

//    if ($link) {
//
//        $sql = "INSERT INTO `contactUsers` ($name, $email, $message)";
//        $result = mysqli_query($link, $sql);
//        if (!$result)
//            echo $error;
//    }
    $title = "Hello, $name!";
    $messageToUser = "Your message will be taken into account!";
    mail($email, $title, $messageToUser);
}

?>