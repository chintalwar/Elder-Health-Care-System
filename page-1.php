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
<style>
  * {
  box-sizing: border-box;
}

.row {
  display: flex;
}

/* Create three equal columns that sits next to each other */
.column {
  flex: 33.33%;
  padding: 5px;
}
@media screen and (max-width: 500px) {
  .column {
    width: 100%;
  }
}
</style>

<body>
<nav>
         <label class="logo">Welcome To Elder Health Care System..!!</label>
         <ul>
             <li><a href="logout.php">Logout</a></li>
             
        </ul>
    
</nav><br>
            <h1 style="text-align:center">Welcome <?php echo $_SESSION ['name']; ?></h1>
                <div class="row">
                    <div class="column">
                        <img src="image/yoga.jfif" alt="Yoga" style="width:100%">
                        <center><a href="https://www.youtube.com/channel/UCbDHC3nnH6Dm0srDFpSuB5Q">Click here to go yoga online</a></center>
                    </div>
                    <div class="column">
                        <img src="image/med1.jfif" alt="Regular Medicine" style="width:100%">
                        <center><a href="cushome.php">Click here to find medicine name and pharmacy near you</a></center>
                    </div>
                    <div class="column">
                        <img src="image/Regular.jfif" alt="Routin Checkup" style="width:100%">
                        <center><a href="page-2.php">Click here to set timer for your routin checkups</a></center>
                    </div>
                </div>
</body>

</html>