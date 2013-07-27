<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sendemail Script</title>
</head>
<body>
<!-- Reminder: Add the link for the 'next page' (at the bottom) -->
<!-- Reminder: Change 'YourEmail' to Your real email -->
<?php

$ip = $_POST['ip'];
$httpref = $_POST['httpref'];
$httpagent = $_POST['httpagent'];
$visitor = $_POST['visitor'];
$visitormail = $_POST['visitormail'];
$sendTo = $_POST['sendTo'];
$content = $_POST['content'];
$attn = $_POST['attn'];
$date = $_POST['date'];

if(!$visitormail == "" && (!strstr($visitormail,"@") || !strstr($visitormail,".")))
{
echo "<h2>Use Back - Enter valid e-mail</h2>\n";
$badinput = "<h2>Feedback was NOT submitted</h2>\n";
echo $badinput;
die ("Go back! ! ");
}

if(empty($visitor) || empty($visitormail) || empty($content )) {
echo "<h2>Use Back - fill in all fields</h2>\n";
die ("Use back! ! ");
}

$todayis = date("l, F j, Y, g:i a") ;

$attn = $attn ;
$subject = $attn;
 
$notes = stripcslashes($notes);

/*$message = " $todayis [EST] \n
Attention: $attn \n
Message: $notes \n
From: $visitor ($visitormail)\n
Additional Info : IP = $ip \n
Browser Info: $httpagent \n
Referral : $httpref \n
";*/
$message = $content;

$header = "Received: from localhost ([127.0.0.1] helo=YOURHOST)
	by YOURHOST with esmtp (Exim 4.69)
	(envelope-from <USERNAME@HOST.COM>)
	id 1PVKNu-00033s-2Z
	for username@gmail.com; Wed, 20 Dec 2010 01:49:22 -0700
". "From: $visitormail\r\n" . "Date: $date\r\n";


//. " X-OriginalArrivalTime:" . $date;

$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


mail($sendTo, $subject, $message, $header);

?>
<p align="center"> Date: 
  <?php echo "today says" . $todayis . "<br>\r\n header says" . $header . "<br>"?>
  <br />
  Thanks 
  <?php echo $visitor ?>
  ( 
  <?php echo $visitormail ?>
  ) <br />
  Your Message Contained:<br />
  <?php $notesout = str_replace("\r", "<br/>", $content);
echo $notesout; ?>
  <br />
  <?php echo $ip ?>
  <br />
	It will be delivered with the time stamp you put on it. 
  <br />
  <a href="index.php"> Send Another</a> </p>
</body>
</html>