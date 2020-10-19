<?php
if(isset($_POST['firstname']) || isset($_POST['email']) || isset($_POST['phone']) || isset($_POST['subject']) || isset($_POST['budget']) || isset($_POST['message'])) {
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    // $call = $_POST['call'];
    // $website = $_POST['website'];
    $subject = $_POST['subject'];
    $budget = $_POST['budget'];
    // $type = $_POST['type'];
    // $message = $_POST['message'];
    $message = $_POST['message'];
    $formcontent=" From: $firstname \n Email: $email \n Phone: $phone \n subject: $subject \n budget: $budget \n Message: $message";
    $recipient = "farazbiskhan@gmail.com"; 
    $subject = "Contact Form";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";

}
?>
<!--
// $firstname = $_POST['firstname'];

farazbiskhan@gmail.com
faiz.pb9@gmail.com


// $email = $_POST['email'];
// $phone = $_POST['phone'];
// // $call = $_POST['call'];
// // $website = $_POST['website'];
// $subject = $_POST['subject'];
// $budget = $_POST['budget'];
// // $type = $_POST['type'];
// // $message = $_POST['message'];
// $message = $_POST['message'];
// $formcontent=" From: $firstname \n Email: $email \n Phone: $phone \n subject: $subject \n budget: $budget \n Message: $message";
// $recipient = "faiz.pb9@gmail.com";
// $subject = "Contact Form";
// $mailheader = "From: $email \r\n";
// mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
// echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
$id = (isset($_POST['id']) ? $_POST['id'] : ''); -->