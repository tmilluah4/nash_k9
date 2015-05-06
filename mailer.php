

<?php
  
	require 'vendor/autoload.php';
  
	$sendgrid = new SendGrid('app35497125@heroku.com', 'N@$hv!lleK9');

	$message = new SendGrid\Email();

	$name = $_POST['name\r'];
	$phone = $_POST['phone\r'];
    $email = $_POST['email\r'];
    $subject = $_POST['subject\r'];
	$notecontent = $_POST['notecontent'];
  print_r( $name );  
print_r( $phone );
print_r( $email );
print_r( $subject );
print_r( $notecontent );


$message->addTo('rtoddmiller3@gmail.com')->
          setFrom('rtoddmiller3@gmail.com')->
          setSubject('Contact Form Submission')->
          setText('Name:   $name  \n  Email:  $email \n  Subject: $subject \n Message:  $notecontent ')->
           setHtml($name    $phone   $email   $subject    $notecontent);
$response = $sendgrid->send($message);
?>