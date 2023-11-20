<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Change these to your own email and subject
  $to = "jaybee.bartolome@gmail.com";
  $subject = "New Contact Form Submission";

  $headers = "From: $email" . "\r\n" .
             "Reply-To: $to" . "\r\n" .
             "X-Mailer: PHP/" . phpversion();

  $body = "Name: $name\n" .
          "Email: $email\n" .
          "Message: $message";

  if (mail($to, $subject, $body, $headers)) {
    echo "Email sent successfully!";
  } else {
    echo "Error sending email.";
  }
}
?>