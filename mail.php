<?php $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $type = $_POST['type'];
    $formcontent="From: $name \n Email: $email \n Phone: $phone \n Message: $message ";
    $recipient = "todd.miller3@yahoo.com";
    $subject = "Contact Form";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
   echo "Thank You!" . " -" . "<a href='/contact.php' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
    ?>