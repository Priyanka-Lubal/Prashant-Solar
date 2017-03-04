<?php
// Emails form data to you and the person submitting the form
// This version requires no database.
// Set your email below
$myemail = "meetgopani1996@gmail.com"; // Replace with your email, please

// Receive and sanitize input
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// set up email
$msg = "New contact form submission!\nName: " . $name . "\nEmail: " . $email . "\nPhone: " . $phone . "\nEmail: " . $email;
$msg = wordwrap($msg, 70);
$headers = "From: meetgopani1996@gmail.com" . "\r\n";
mail($myemail, "New Form Submission", $msg, "From: meetgopani1996@gmail.com");
mail($email, "Thank you for your form submission", $msg, "From: meetgopani1996@gmail.com");
echo 'Thank you for your submission.  Please <a href="index.php">Click here to return to our homepage.';

?>
