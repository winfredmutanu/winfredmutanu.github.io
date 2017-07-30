<!DOCTYPE html>
<html>
<head>
	<title>Send Message</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/animate.css">
</head>
<body>

</body>
</html>




<?php
if (!isset($_POST['save'])) {
  exit();
}

extract($_POST);

$mul= mysqli_connect("localhost","root","","library");



$kiki = mysqli_query($mul,"INSERT INTO `contact`( `name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')");

if ($kiki==true) {
	echo "<center>";
  echo "<h2>Message received.</h2> <br><br>";
echo "<a href='index.php' class ='btn btn-success'>Go BACK</a>";
}
elseif ($kiki==false) {
  echo "message failed .try again";
}
else {
  echo "Error.Contact Admin.";
}
?>