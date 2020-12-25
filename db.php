<?php
$email = "";
if(isset($_POST['submit'])) {
 
    $email=$_POST['email'];

    $to="nwobodokenechukwu2@gmail.com";
    $subject="Form Submission"; 
    $message="Hi there,"."\n\n"."We have receive your subscription notification from".$email."\n"."Thanks for subscribing.";
    $headers="From: ".$email;
    //connect to database
    $conn = new mysqli('z3iruaadbwo0iyfp.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'ikx6md31jp8n5umv', 'jhn76xsfqq53bes1', 'bqow9bfkuqhgh4t3');  
    //insert emails to the database table
    $cmd = "INSERT into myemaillist value('$email');";
    $result = mysqli_query($conn, $cmd);
    //check if subscription was successful
     if($result || mail($to, $subject, $message, $headers)) {
        echo $success = "Congratulations! You have successfully subscribed to our mailing list.";
    }
    else {
        echo $error = "Sorry! Subscription was not successful, please provide a valid email address.";
    }

}

require_once '/path/to/vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.example.org', 25))
  ->setUsername('nwobodokeenechukwu2')
  ->setPassword('Godsgrace123#1')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject'))
  ->setFrom(['nwobodokenechukwu2@gmail.com' => 'Kenehukwu Nwobodo'])
  ->setTo(['receiver@domain.org', 'other@domain.org' => 'A name'])
  ->setBody('Hello there, thanks for subscribing for our lifestyle blog. We got your back.')
  ;

// Send the message
$result = $mailer->send($message)

?>

