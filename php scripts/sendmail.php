<?php 
//$action=$_REQUEST['action']; 
ob_start();
//Define the $_POST variables...
$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$email = $_REQUEST['your-email'];
$phone = $_REQUEST['Phone'];
$comments = $_REQUEST['comments'];

mail( "danielweisbergrealtor@gmail.com",
    "DanielFloridaRealty site submission",
    "Name:  $fname $lname \n Email: $email \n Phone: $phone \nComments: $comments"); //Edit the email address you wish messages to be sent to
echo('Your message was sent successfully! Will redirect you back in 3 seconds...');
header( "refresh:3;url=http://www.danielfloridarealty.com" );
?> 