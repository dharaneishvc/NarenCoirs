<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "narencoirs@gmail.com";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
}
?>
