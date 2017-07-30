<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>searchbook</title>
	<style type="text/css">
	body{
		background-image: url("img/b1.jpg");
	}
	h3{
		color: white;
	}
	


</style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top ">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span> 
	      </button>
	      <a class="navbar-brand" href="#">ELIMU LIBRARY</a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="index.php">HOME</a></li>
	        <li><a href="#about">ABOUT US</a></li>
	         
	        <li><a href="#addbook">ADD BOOK</a></li>
          <li><a href="#searchbook">SEARCH BOOK</a></li> 
	        <li><a href="#samplebook">SAMPLE BOOKS</a></li>
	        <li><a href="#contact">CONTACT US</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a></li>
          <li><a href=""><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
	        <li><a href="#myModal" data-target="#myModal" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span>User Login</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
<br><br>
<!--search section-->
	<center>
	<form method="POST" >
		<h3>Search by Book NO</h3>
		<input type="text" name="bookno" placeholder="Enter the Book No to search. " required="">
		
		<input type="submit" name="booksearch" class="btn btn-success">
		<br><br>
	</form>

	<form method="POST" action="genre.php">
		<h3>Search by Genre</h3>
		<input type="text" name="genre" placeholder="Enter the Genre to search. " required="">
		
		<input type="submit" name="save" class="btn btn-success">
		<br><br>
	</form>

	<form method="POST" action="publication.php" >
	<h3>Search by Year of Publication</h3>
		<input type="text" name="max" placeholder="Enter the Minimum Year " required="">
		
		<input type="text" name="min" placeholder="Enter the Maximum Year " required="">
			
		<input type="submit" name="save" class="btn btn-success">
		<br><br>
	</form>


	<form method="POST" action="title.php">
		<h3>Search by Book Title</h3>
		<input type="text" name="title" placeholder="Enter the Author to search. " required="">
		
		<input type="submit" name="save" class="btn btn-success">
		<br><br>
	</form>

</body>
</html>
<?php 
if (!isset($_POST['booksearch'])) {
	exit();
}
extract($_POST);
$key= mysqli_connect("localhost","root","","library");
$res = mysqli_query($key,"SELECT * FROM book WHERE bookno = '$bookno'");
$g = mysqli_num_rows($res);

if ($g < 1) {
	echo "NO books found !";
	exit();
}
echo "$g books found. <br><br>";
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
