<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  $to = "aditya3200rating@gmail.com"; // 🔴 CHANGE THIS
  $subject = "New Contact Message - Vivek Construction Limited";

  $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "success";
  } else {
    echo "error";
  }
}
?>
