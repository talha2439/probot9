<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['firstname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $budget = $_POST['budget'];
  $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'farazbiskhan@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'Qlopflop2'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('farazbiskhan@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('farazbiskhan@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>Phone No: $phone <br>Subject: $subject <br>Budget: $budget <br>Message : $message</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Thanks for your query, we will get back shortly after reviewing it.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
