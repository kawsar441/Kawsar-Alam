<?php
    $name = $_POST['name'];
    $visitor_email = $POST['email'];
    $message = $POST['message'];
    



    $email_from = 'kawsaralam5441@hotmail.com';

    $email_subject = 'New Form Submission';

    $email_body = "User Name: $name\n".
                    "User Email: $visitor_email\n".
                        "User Message: $message\n";



    $to = "kawsaralam5441@gmail.com";
    
    
    $headers = "From: $email_from \r\n";
    
    $headers .= "Reply-to: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");


?>