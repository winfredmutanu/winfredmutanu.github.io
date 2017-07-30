<!DOCTYPE html>
<html>
<head>
	<title>genre search</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/animate.css">
<style type="text/css">
	body{
		background-image: url("img/cover.jpg");
	}
	#text{
		color: white;
	}


</style>
</head>
<body>

</body>
</html>


<?php 
if (!isset($_POST['save'])) {
	exit();
}
extract($_POST);

$key= mysqli_connect("localhost","root","","library");

$res = mysqli_query($key,"SELECT * FROM book WHERE year BETWEEN '$max' and '$min'");


$g = mysqli_num_rows($res);
echo "<center>";
if ($g < 1) {
	echo "<h4 id = 'text'>NO books found !</h4>";
	exit();
}
echo "<h4 id = 'text'>$g books found.</h4> <br><br>";
while($colms = mysqli_fetch_array($res))
{//starts here
echo "<h5 class='alert alert-success'>";
	echo "Book Number: $colms[0] <br>";
	echo "Genre: $colms[1] <br>";
	echo "Pages: $colms[2]<br>";
	echo "Year: $colms[3]<br>";
	echo "Title: $colms[4]<br>";
	echo "Author: $colms[5]<br>";
		
echo "</h5>";
}
?>