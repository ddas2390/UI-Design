<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Collect the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Validate the form data
  $errors = array();
  if (empty($name)) {
    $errors[] = 'Name is required';
  }
  if (empty($email)) {
    $errors[] = 'Email is required';
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Invalid email format';
  }
  if (empty($message)) {
    $errors[] = 'Message is required';
  }

  // If there are no errors, send the email
  if (empty($errors)) {
    $to = 'dedas@algomau.ca'; 
    $subject = 'New Contact Form Submission';
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $name <$email>\r\nReply-To: $email\r\n";
    if (mail($to, $subject, $body, $headers)) {
      // Email sent successfully
      echo '<p>Thank you for your message. We will get back to you shortly.</p>';
    } else {
      // Email failed to send
      echo '<p>Sorry, there was an error sending your message. Please try again later.</p>';
    }
  } else {
    // Display validation errors
    echo '<ul>';
    foreach ($errors as $error) {
      echo "<li>$error</li>";
    }
    echo '</ul>';
  }
}
?>
