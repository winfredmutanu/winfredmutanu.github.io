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



$kiki = mysqli_query($mul,"SELECT * FROM `signup` WHERE username = '$username' AND userpassword = '$userpassword' AND usertype = 'user'");
$g = mysqli_num_rows($kiki);

if ($g ==1) {
	echo "<center>";
  echo "<h2>You are  now Logged In.</h2> <br><br>";
echo "<a href='index.php' class ='btn btn-success'>Go BACK</a>";
}
elseif ($g < 1) {
  echo "Login failed .try again";
}
else {
  echo "Error.Contact Admin.";
}
?>