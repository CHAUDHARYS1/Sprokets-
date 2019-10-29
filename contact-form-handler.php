
<?php

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = "shitalchau10@thedesignerisland.com";
    
    $email_subject = "Someone wants to contact you!";
    
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                    "User Message: $message.\n";

    $to = "shitalchau10@gmail.com";
    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";
    
    mail($to,$email_subject, $email_body,$headers);

    header("Location:thankyou");
  

?>