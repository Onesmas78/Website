<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact - glishytech</title>
</head>
	
<body>

    Welcome <?php echo $_POST["email"]; ?>!<br />
Your email address is <?php echo $_POST["subject"]; ?>.
<?php
$to = "someone@example.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "someonelse@example.com";
$headers = "From: $from";
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?>
</body>
</html>
