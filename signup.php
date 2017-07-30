<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
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



$kiki = mysqli_query($mul,"INSERT INTO `signup`( `username`, `useremail`, `userpassword`, `usertype`) VALUES ('$username','$useremail','$userpassword','$usertype')");

if ($kiki==true) {
	echo "<center>";
  echo "<h2>You can now LogIN.</h2> <br><br>";
echo "<a href='index.php' class ='btn btn-success'>Go BACK</a>";
}
elseif ($kiki==false) {
  echo "message failed .try again";
}
else {
  echo "Error.Contact Admin.";
}
?>