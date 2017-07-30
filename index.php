
<!DOCTYPE html>
<html>
<head>
	<title>Rave Institute</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/animate.css">

  <style type="text/css">
		#home{
			background-image: url(img/lib.jpg);
			padding: 20%;
			background-size: cover;
			background-attachment: fixed;
		}
		#home span{
			color: white;

		}
    #we{
      color: white;
    }
		#home h1{
			font-size: 60px;
		}
		#home p{
			font-size: 20px;
			font-family: purisa;
      color: white;
		}
		#home a{
			background-color: black;
			color: yellow;
			padding: 3%;
			font-size: 20px;
		}
		hr{
			width: 8%;
			border: solid salmon 2px;
		}
		#about{
			padding-top: 8%;
			padding-bottom: 19%;
		}
		#services{
			padding-top: 10%;
			padding-bottom: 18%;
			background-image: url(images/sa.jpg);
			background-size: cover;
			
		}
		#services p{
			color: 
		}
		#services img{
			border-radius: 50%;
			
		}
		#co{
			background-color: red;
			border-radius: 4px;
			padding left: : 1.5%;
			color: white;

		}
    #addbook{
      background-image: url(img/book.jpg);
      background-size: cover;
       padding-top: 14%;
      padding-bottom: 15%;
    }
    #addbook p{
      font-style: bold;
      font-size: 20px;
    }
    #pricing{
      padding-top: 14%;
      padding-bottom: 15%; 
      margin-left: 5%;
      margin-right: 5%; 

    }
    #start{
      background-color: salmon;
      
      border-radius: 12px;
      padding: 1.4%;

    }
    #start h3,h4{
      color: white;
    }
    #prem{
      background-color: #9CCC65;
      border-radius: 12px;
      padding: 1.4%;
    }
    #prem h3,h4{
      color: white;
    }
    #stan{
      background-color: #00B0FF;
      border-radius: 12px;
      padding: 1.4%;
    }
    #stan h3,h4{
      color: white;
    }
    #contact span{
      color: salmon;
    }
    #contact{
      padding-top: 14%;
      padding-bottom: 14%;
      background-image: url(2.jpg);
    }
    #team span{
      color: salmon;
    }

    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
     width: 50%;}
    #team {
      margin-top: 5%;
    } 
    #test h1{
      color: salmon;
    }
    #samplebook img{
      margin-left: 15%;
      margin-right: 15%;

    }
    #samplebook{
      padding-bottom: 11%;
      padding-top: 10%;
      background-image: url();
      background-size: cover;
    }
    #myModal{
      background-color: salmon;
    }

</style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
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
          <li><a href="searchbook.php">SEARCH BOOK</a></li> 
	        <li><a href="#samplebook">SAMPLE BOOKS</a></li>
	        <li><a href="#contact">CONTACT US</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#myModal1" data-target="#myModal1" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a></li>
          <li><a href="#myModal" data-target="#myModal" data-toggle="modal"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
	        <li><a href="#myModal2" data-target="#myModal2" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span>User Login</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>



<!--span tag is used when you dont know what to use as a tag.-->
  	<section id="home" class="row text-center">
  		<div class="col-md-12 wow fadeInRight" data-wow-delay="0.5s">
  			<h1><span id="we">WE ARE</span> <span>ELIMU</span></h1>
  			<p>Home Of Knowledge</p>
  			<br><br><br>
  			<a class="btn" href="#about">LEARN MORE</a>

  		</div>
  	</section>
  	<br><br><br>
  	<!--About us section-->
  	<section id="about" class="row">
  		<div class="text-center wow fadeInLeft" data-wow-delay="0.6s">
  		<h1>ABOUT US</h1>
  		<hr>
  		</div>
  		<br>
  		<div class="col-md-4">
  			<img src="img/b3.jpg" width="400">

  		</div>

  		<div class="col-md-4">
  			<h3>Who We Are</h3>
  			<p>We are Elimu Library.Your exquisite home of knowledge. We host books of different genres like :</p>
          <ul >
            <li>Fiction</li>
            <li>Thrillers</li>
            <li>Fantasy</li>
            <li>Romance</li>
            <li>Drama</li>
            <li>Real life Stories</li>
          </ul>
  		</div>

  		<div class="col-md-4">
  			<h3>What We Do</h3>	
  			<p class="text-center">Our role is to support learning, teaching, research  across the society.

We do this by enabling access to a wide range of information resources (print and electronic); providing a variety of learning and study environments; and offering services which support the development of learning. The site is accessible 24 hours a week.</p><br><p class="text-center">Elimu is your one stop source of knowledge. We believe magic happens when ambition,search and desire of knowledge can be found at the click of button. Every member of our team is a free thinker and creative to the core. </p>
  		</div>
  	</section>

    <!--ADD BOOK Section-->
    <section id="addbook"> 
        <div class="text-center wow fadeInLeft" data-wow-delay="0.6s">
          <h1>ADD BOOK</h1>
          <hr>
       </div>

        <fieldset>
            <form method="POST" class="text-center">
   
    <br><br>
    <p>Enter The Book Number</p>
    <input type="text" name="bookno" placeholder="Enter The Book number" required="">
    <br><br>
    <p>Enter the Genre</p>
    <input type="text" name="genre" placeholder="Enter The Genre " required="">
    <br><br>
    <p>Enter the number of pages</p>
    <input type="text" name="pages" placeholder="Enter the number of pages" required="">
    <br><br>
     <p>Enter Year of publication</p>
    <input type="text" name="year" placeholder="Enter Year of publication" required="">
    <br><br>
     <p>Enter book title</p>
    <input type="text" name="title" placeholder="Enter book title" required="">
    <br><br>
      <p>Enter author name</p>
    <input type="text" name="author" placeholder="Enter author name" required="">
    <br><br>
    <input type="submit" name="save" class="btn btn-success">
          </form>
        </fieldset>



    </section>

  	
    
      


    <!--Sample Book section-->

    <section id="samplebook" class="row text-center">
        <h1>OUR <span>SAMPLE BOOKS</span></h1>
        <hr>
        <p>These are some of our sample books</p>
        <br>

        <div class="col-md-5">
          <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000" data-pause="hover">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="img/cover.jpg" alt="Brian Ruckley" style="width: 100%">
                  <div class="carousel-caption">
                    <h3>Brian Ruckley</h3>
                    <p>WinterBirth</p>
                  </div>
                </div>

                <div class="item">
                  <img src="img/cover2.jpg" alt="Bernard Cornwell" style="width: 100%">
                  <div class="carousel-caption">
                    <h3>Bernard Cornwell</h3>
                    <p>Second Song</p>
                  </div>
                </div>

                <div class="item">
                  <img src="img/cover3.jpg" alt="Bernard Cornwell" style="width: 100%">
                  <div class="carousel-caption">
                    <h3>Bernard Cornwell</h3>
                    <p>Sharpes Kingdom</p>
                  </div>
                </div>

                <div class="item">
                  <img src="img/cover2.png" alt="Bernard Cornwell" style="width: 100%">
                  <div class="carousel-caption">
                    <h3>Bernard Cornwell</h3>
                    <p>The last Kingdom</p>
                  </div>
                </div>
              
              <div class="item">
                  <img src="img/cover7.jpg" alt="C.S.Fireman" style="width: 100%">
                  <div class="carousel-caption">
                    <h3>C.S.Fireman</h3>
                    <p>Black Sun Rising</p>
                  </div>
                </div>

                <div class="item">
                  <img src="img/cover8.jpg" alt="Diana Gabaldong" style="width: 100%">
                  <div class="carousel-caption">
                    <h3>Diana Gabaldong</h3>
                    <p>Outlander</p>
                  </div>
                </div>
                </div>
              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>  
        </div>

        <div class="col-md-7 text-center">
          
                <p>PRESS THE BUTTONS</p>
                
                <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#mis">Mission</button>
                <div id="mis" class="collapse">
                  To be a centre of knowledge
                </div>
                <br><br><br><br>
                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#vis">Vision</button>
                <div id="vis" class="collapse">
                  To provide information for the hungry for knowledge
                </div>
                <br><br><br><br>
                <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#gol">Goals</button>
                <div id="gol" class="collapse">
                    to be your number site for knowledge
                </div>

          
        </div>



    </section>



   


        


    </section>
    <!--COntact us Section-->
    <section class="row" id="contact">
        <div class="text-center wow fadeInLeft" data-wow-delay="0.5s">
        <h1>CONNECT <span>WITH US</span></h1>
        <hr>
        <p>Need to talk to us. Do not hesitate to contact us below.We value your feedback!</p>
        </div>

        <br><br>
        <div class="col-md-4 text-center wow fadeInDown" data-wow-delay="0.5s">
          
        <span class="glyphicon glyphicon-phone"></span>+254 798 245 718
        <br><br>
       <span class="glyphicon glyphicon-envelope"></span> info@elimu.co.ke
        <br><br>
      <span class="glyphicon glyphicon-map-marker"></span>  Two Towers 7th Floor, Nairobi
        <br><br>
        <h3 b>WE ARE OPEN</h3>
        <br><br>
        <p>Monday- Friday: 8.00 AM to 5.00 PM</p>
        <p>Saturday: 9.00 AM to 12.00 PM</p>


        </div>

        <div class="col-md-8 wow fadeInRight" data-wow-delay="0.5s" id="mo">
          


                    <form method ="POST"  action="contact.php" role="form" data-toggle="validator" class="shake" >
                        <div class="row">
                            <div class="col-md-4 col-xs-12 col-sm-4">
                                <div class="form-group">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="your name" required data-error="type your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12 col-sm-4">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="your email" required
                                    data-error="type your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12 col-sm-4">
                                <div class="form-group">
                                    <input type="text" name="subject" id="subject" class="form-control" placeholder="subject" required
                                    data-error="type your subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <div class="form-group">
                                    <textarea  id="message" name="message" cols="30" rows="6" class="form-control" placeholder="message" required data-error="type your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div> <!-- row end -->
                            <div class="col-md-12 col-xs-12 col-sm-12 ">
                                <button class="btn btn-primary black"  type="submit" value="Submit" name="save">submit now</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                             </div>
                        </div>
                    </form>



        </div>

     </section>

     <!-- Trigger the modal with a button -->


     <!--Sign up Modal -->
<div id="myModal" class="modal fade" role="dialog" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sign Up</h4>
      </div>
      <div class="modal-body">
        
        <form method="POST" class="vic" action="signup.php">  
      <h3>Enter Your Name</h3><br>
    <input type="text" name="username" placeholder="Enter your Name" required="">
    <br><br>
    <h3>Enter Your Email</h3><br>
    <input type="email" name="useremail" placeholder="Enter your Email" required="">
    <br><br>
    <h3>Enter Your Password</h3><br>
    <input type="password" name="userpassword" placeholder="Enter your Password" required="">
    <br><br>
    <h3>Enter Your User Type user or admin</h3><br>
    
     <input type="text" name="usertype" placeholder="Enter your usertype" required="">
    <br><br>

    <input type="submit" value="submit" name="save" class="btn btn-success">

  </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

    <!--Admin Login  Modal -->
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sign Up</h4>
      </div>
      <div class="modal-body">
        
        <form method="POST" class= "vic" action="adminlogin.php">
      <h3>Enter Your Name</h3><br>
    <input type="text" name="username" placeholder="Enter your Name" required="">
    <br><br>
    
    <h3>Enter Your Password</h3><br>
    <input type="password" name="userpassword" placeholder="Enter your Password" required="">
    <br><br>
    <input type="submit" name="save" class="btn btn-success">

  </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

   <!--User Login Modal -->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sign Up</h4>
      </div>
      <div class="modal-body">
        
        <form method="POST" class="vic" action="userlogin.php">
      <h3>Enter Your Name</h3><br>
    <input type="text" name="username" placeholder="Enter your Name" required="">
    <br><br>
    
    <h3>Enter Your Password</h3><br>
    <input type="password" name="userpassword" placeholder="Enter your Password" required="">
    <br><br>
    <input type="submit" name="save" class="btn btn-success">

  </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>






      <script src="js/jquery-2.1.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/parallax.min.js"></script>
      <script src="js/wow.min.js"></script>
      <script src="js/jquery.easing.min.js"></script>
      <script src="js/fliplightbox.min.js"></script>
      <script src="js/functions.js"></script>


</body>
</html>

<?php 
if (!isset($_POST['save'])) {
  exit();
}

extract($_POST);

$key= mysqli_connect("localhost","root","","library");

$res = mysqli_query($key,"INSERT INTO `book`( `bookno`, `genre`, `pages`, `year`,`title`, `author` ) VALUES ('$bookno','$genre','$pages','$year','$title','$author')");



if ($res==true) {
  echo "Book Registered Successfully.Thank you.";
}
elseif ($res==false) {
  echo "Book Registration failed.Try Again";
}
else {
  echo "Error.Contact Admin.";
}





 
 


?>
