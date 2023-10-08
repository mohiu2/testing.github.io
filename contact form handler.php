<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST ['message'];

    $email_from = 'mohiu3383@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
    "User Email = $visitor_email.\n".
    "User Mesaage = $message.\n";

    $to = "mohiu2906@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
?>