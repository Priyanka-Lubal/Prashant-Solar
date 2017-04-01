<?php
require 'PHPMailer/PHPMailerAutoload.php';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$msg = "New contact form submission!\nName: " . $name . "\nEmail: " . $email . "\nPhone: " . $phone . "\nMessage: " . $message;
//echo $to;
$to1 = '';
$pass = '';
$flag = 0;
$mail = new PHPMailer;
{
//$mail->SMTPDebug = 3;                               // Enable verbose debug output

    // $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'meetgopani1996@gmail.com';                 // SMTP username
    $mail->Password = 'meet311296';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom('meetgopani1996@gmail.com', 'Marketing Team');
    $mail->addAddress((string)$email);     // Add a recipient
    /*$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');*/
    $mail->addCC('meetgopani1996@gmail.com');
    $mail->addBCC('priyanka.lubal33@gmail.com');

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Thank you for your form submission';
    $mail->Body = $msg;

    if (!$mail->send()) {
        header("location: contact.php?connection_failure=mailnahigaya");
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        header("location: contact.php");
        echo "Done with submission";
    }
}