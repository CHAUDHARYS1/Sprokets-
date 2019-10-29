
<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $type_of_work = $_POST['typeofwork'];
    $price = $_POST['price'];
    $message = $_POST['message'];

    $email_from = "shitalchau10@thedesignerisland.com";
    
    $email_subject = "Some wants to hire you!";
    
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                    "User Type of work: $type_of_work.\n".
                    "User Price: $price.\n".
                    "User Message: $message.\n";

    $to = "shitalchau10@gmail.com";
    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";
    
    mail($to,$email_subject, $email_body,$headers);

    header("Location:thankyou");

?>