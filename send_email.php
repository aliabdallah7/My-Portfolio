<?php
if(isset($_POST['submit'])){
  $to = 'ali.abdallah43792@gmail.com';
  $subject = 'Website Contact Form'; // Email subject

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $headers = "From: $name <$email>" . "\r\n" .
    "Reply-To: $email" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

  $mailSent = mail($to, $subject, $message, $headers);

  if ($mailSent) {
    echo 'Email sent successfully!';
  } else {
    echo 'Error sending email.';
  }
}
?>
