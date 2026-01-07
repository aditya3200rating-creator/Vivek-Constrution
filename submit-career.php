<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $position = $_POST['position'];

  $to = "aditya3200rating@gmail.com"; // 🔴 CHANGE THIS
  $subject = "New Engineer Application - Vivek Construction Limited";

  $file = $_FILES['resume'];
  $fileName = basename($file["name"]);
  $targetPath = "uploads/" . $fileName;

  // Allow only PDF/DOC
  $allowed = ['pdf', 'doc', 'docx'];
  $ext = pathinfo($fileName, PATHINFO_EXTENSION);

  if (!in_array($ext, $allowed)) {
    die("Invalid file type");
  }

  move_uploaded_file($file["tmp_name"], $targetPath);

  $body = "Name: $name\nEmail: $email\nPosition: $position\nResume: $fileName";

  mail($to, $subject, $body);

  echo "success";
}
?>
