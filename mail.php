<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "ahmadyovanardiansyah@gmail.com";
    $subject = "Mail From SMK Ma'arif NU Driyorejo";
    $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
    $headers = "From: noreply@yoursite.com" . "\r\n" . "CC: somebodyelse@example.com";

    if($email!=NULL){
        mail($to,$subject,$txt,$headers);
    }

    header("Location:thankyou.html");
?>