<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // get form fields
  $name = $_POST['name'];
  $email = $_POST['email_address'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  // validate fields (optional)

  // send email
  $to = 'alaska.alex.agp@gmail.com';
  $subject = 'New contact form submission';
  $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo 'Message sent successfully';
  } else {
    echo 'Message failed to send';
  }
}

?>