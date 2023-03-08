<?php
if(isset($_POST['submit'])) {
  $to = "polloyonson@gmail.com";
  $name = $_POST['name'];
  $from = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $headers = "From: $name <$from>" . "\r\n" .
             "Reply-To: $from" . "\r\n" .
             "X-Mailer: PHP/" . phpversion();

  mail($to, $subject, $message, $headers);
  echo "Thank you for contacting us. We will get back to you soon.";
}
?>