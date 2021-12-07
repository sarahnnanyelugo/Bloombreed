<?php
 
if($_POST) {
  $to = "sarahnnanyelugo@gmail.com"; // your mail here
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
  $subject ="Enquiry Message";
  $phone = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
  $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);

  $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
  $body = "Message: $message\nE-mail: $email\nphone: $phone\nName: $name";
  
  //mail headers are mandatory for sending email
  $headers = 'From: ' .$email . "\r\n".
  'Reply-To: ' . $email. "\r\n" .
  'X-Mailer: PHP/' . phpversion();
 
  if(@mail($to, $subject, $body, $headers)) {
    $output = json_encode(array('success' => true));
    die($output);
  } else {
    $output = json_encode(array('success' => false));
    die($output);
  }
}