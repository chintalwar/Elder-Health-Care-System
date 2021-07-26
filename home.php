<?php 
include('conn.php');
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <link rel="icon" type="image/jfif" href="care.jfif" size="18*18">
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
     <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="css/bootstrap.css"/>
	 <script src="js/jquery_library.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script>
         $(document).ready(function(){
            $('#icon').click(function(){
              $('ul').toggleclass('show');
            });
         });
     </script>
     <title>Welcome To Home Of Elder Care System</title>
 </head>
 <body>
     <nav>
         <label class="logo">Elder Health Care</label>
         <ul>
             <li><a class="active" href="#">Home</a></li>
             <li><a href="about.php">About</a></li>
             <li><a href="login.php">Login</a></li>
             <li><a href="signup.php">Sing Up</a></li>
             <li><a href="contact.php">Contact</a></li>
        </ul>
        <label id="icon">
            <i class="fas fa-bars"></i>
        </label>
     </nav>
     <div class="container">
  
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                    <div class="item active">
                        <img src="image/1.jfif"  style="width:100%;">
                        <div class="carousel-caption">
                            <h3>Welcome to Health Care System..!!</h3>
                            <p>Join us for living a healthy and happy life...!!</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="image/2.jfif"  style="width:100%;">
                        <div class="carousel-caption">
                            <h3>Get the doctor guide..!!</h3>
                            <p>Refresh youself and feel younger..!!</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="image/3.jfif"  style="width:100%;">
                        <div class="carousel-caption">
                            <h3>We Create Healthy and friendly enviroment for you..!!</h3>
                        </div>
                    </div>
            </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel"  data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel"  data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
        </div>


        <div class="parts container row" style="margin-top:30px;padding-bottom:30px; background:#EAEAEAE6;width: 101%;"> 
				<div class="col-md-4 text-center" style="margin-top:60px;padding-bottom:30px;"> 
					<img src="image/6.jfif" alt="" />
                    <h3>Yoga Classes</h3>
                    <p>We help you to live healthy life for a long.. </p>
				</div>
				<div class="col-md-4 text-center" style="margin-top:60px;padding-bottom:30px;"> 
					<img src="image/32.png" alt="" />
                    <h3>Nearest Pharmacy</h3>
                    <p>Find the nearest pharmacy around your home.</p>
				</div>
				<div class="col-md-4 text-center" style="margin-top:60px;padding-bottom:30px;">  
					<img src="image/33.png" alt="" />
                    <h3>Gental Medicine Reminder</h3>
                    <p>We  care for you..</p>
				</div>
		</div>
       <center>
        <div>
            <h3> Customer satisfaction is our main goal..!!</h3>
            <h4>You health is our priority..Come and join us..</h4>
        </div>
        </center>
        <div class="container row sgn" style="margin-top:30px;padding-bottom:30px; width: 103%;"> 
				<div class="col-md-12 text-center" style="margin-top:60px;padding-bottom:30px;"> 
					<img src="image/reward.png" alt="" />
                    <h3>Sign Up today for getting good reward</h3> <br>
                    <a href="signup.php" style="background:#7DD2DB; color: white; padding: 10px">As Customer</a>
                    <br>
                    <br>
                    <p style="font-weight: bold; font-size: 15px;">Sign Up to get access all..!!</p>
				</div>
		</div>

        <div class="container row" style="width: 103%; background: #1a1a1ae6; margin-top: -30px;"> 
				<div class="col-md-12 text-center" style="margin-top:30px;padding-bottom:20px;"> 
			         <p style="font-weight: bold; font-size: 15px;color: white;">Designed by Suhasini Chintalwar</p>
				</div>
		</div>
				
        
 </body>
 </html>