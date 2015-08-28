<?php
$interest = $_POST['interest'];
$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$zip = $_POST['zip'];
$campus = '';
$gradYear = $_POST['graduation'];        
$yearsExp = ($_POST['experience'] == '8overall' ? '8' : '');
$yearsEnergy = ($_POST['experience'] == '3energy' ? '3' : '');  
$lead_source = $_POST['lead_source'];
$company = $_POST['company'];       
$referrer = $_POST['referrer'];
$referFriend = $_POST['referFriend'];   
$edLevel = $_POST['edLevel'];

// basic scrubbing of the free form lead data fields
if (strlen($first) > 0)
{
	$first = trim($first);
}
else
{
	$invalid = TRUE;
	$validationMessage = "Please enter your first name";
	$messages = "\nMissing first name\n";
}

if (strlen($last) > 0)
{
	$last = trim($last);
}
else
{
	$invalid = TRUE;
	$validationMessage = "Please enter your last name";
	$messages = "\nMissing last name\n";
}

if (strlen($email) > 0)
{
	$email = trim($email);
}
else
{
	$invalid = TRUE;
	$validationMessage = "Please enter your email address";
	$messages = "\nMissing email\n";
}

if (strlen($phone) > 0)
{
	$phone = trim($phone);
}
else
{
	$invalid = TRUE;
	$validationMessage = "Please enter your phone number";
	$messages = "\nMissing phone\n";
}

if (strlen($zip) > 0)
{
	$zip = trim($zip);
}
else
{
	$invalid = TRUE;
	$validationMessage = "Please enter your zip code";
	$messages = "\nMissing zip code\n";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
	$invalid = TRUE;
	$validationMessage = "Please enter a valid email address";
	$messages = "\nInvalid email address: " . $email . "\n";
}

if ($invalid)
{
	// email is invalid
	echo "<html><body>" .
		"<script language='javascript'>alert('" . $validationMessage . "'); window.history.back();</script>" .
		"</body></html>";
	die();
}
?>
