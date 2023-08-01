<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Validate and sanitize the inputs (optional but recommended)

  // Send the form data to an email address
  $to = "h.raul0905@gmail.com"; // Replace with your email address
  $subject = "New Contact Form Submission";
  $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    // Email sent successfully
    echo "Thank you for your message!";
  } else {
    // Failed to send email
    echo "Oops! Something went wrong. Please try again later.";
  }
}
?>
