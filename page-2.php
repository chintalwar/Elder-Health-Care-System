<?php
session_start();

// This page can be accessed only after login
// Redirect user to login page, if user email is not available in session
if (!isset($_SESSION["name"])) {
    header("location: login.php");
}
?>

<html>
<head>
    <link rel="icon" type="image/jfif" href="care.jfif" size="18*18">
    <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
     <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="css/bootstrap.css"/>
     <title> User Page -To Elder Health care</title>
</head>

<body>
<nav>
         <label class="logo">Welcome To Elder Health Care System..!!</label>
         <ul>
             <li><a href="logout.php">Logout</a></li>
        </ul>
    
</nav><br>
<div class="container">
    
        <div class="col-lg-10 m-auto">

            <form method="POST" action="page-2.php" name="form2">
               <div class="card">
                   <div class="card-header bg-dark">
                       <h1 class="text-white text-center">Set Reminder Here<h1>
                    </div>
                    <lable>ADD TITLE</lable>
                    <input type="text" name="title" class="form-control" required><br>

                    <lable>ADD TIME</lable>
                    <input type="time" name="time" class="form-control" required><br>

                    <button class="btn btn-primary btn-lg" type="submit" name="time"  value="time">Set Time</button>
                </div>
             
            </form>
        </div>
</div>
    <a href="page-1.php"> Go to page-1</a>
</body>
</html>