<?php 
//$action=$_REQUEST['action']; 
ob_start();
//Define the $_POST variables...
$name = $_REQUEST['your-name'];
$email = $_REQUEST['your-email'];
$phone = $_REQUEST['Phone'];
$address = $_REQUEST['youraddress'];
$preferredCity = $_REQUEST['preferredcity'];
$state = $_REQUEST['state'];
$zip = $_REQUEST['zip'];
$approximateDateOfMove = $_REQUEST['ApproximateDateofMove'];
$PreferredMethodofContact = $_REQUEST['PreferredMethodofContact'];
$typeofproperty = $_REQUEST['typeofproperty'];
$minbedrooms = $_REQUEST['minbedrooms'];
$baths = $_REQUEST['baths'];
$sqft = $_REQUEST['sqft'];
$comments = $_REQUEST['comments'];
$page = $_REQUEST['pageDetails'];


mail( "danielweisbergrealtor@gmail.com",
    "DanielFloridaRealty site submission",
    "PageDetails: $page\nName:  $name \n Email: $email \n Phone: $phone \nAddress: $address \nCity: $preferredCity\nState: $state\nZip: $zip\nDate of Move: $approximateDateOfMove\nPreferred Method of Contact: $PreferredMethodofContact\nType of Property:$typeofproperty\nBedrooms: $minbedrooms\nBaths: $baths\nSqft: $sqft\nComments: $comments"); //Edit the email address you wish messages to be sent to
echo('Your message was sent successfully! Will redirect you back in 3 seconds...');
header( "refresh:3;url=http://www.danielfloridarealty.com" );
?> 