<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/jfif" href="care.jfif" size="18*18">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title> Login -To Elder Health care</title>
</head>

<body>
    <nav>
         <label class="logo">Welcome To Elder Health Care System..!!</label>
         <ul>
             <li><a class="active" href="home.php">Home</a></li>
             <li><a href="signup.php">Sing Up</a></li>
        </ul>
    </nav>
    <div class="container">
    
        <div class="col-lg-10 m-auto">

            <form method="POST" action="login.php" name="form1">
               <div class="card">
                   <div class="card-header bg-dark">
                       <h1 class="text-white text-center"> Login Here<h1>
                    </div>
                    <lable> Name Or Email </lable>
                    <input type="text" name="name" class="form-control" required><br>

                    <lable> PASSWORD </lable>
                    <input type="password" name="password" class="form-control" required><br>

                    <button class="btn btn-primary btn-lg" type="submit" name="login"  value="login">Login</button>
                    <p>Don't have an account?<a href="signup.php">Sign Up</a></p>
                </div>
                <?php

                        
                        // Start PHP session at the beginning 
                        session_start();

                        // Create database connection using config file
                        include_once("conn.php");

                        // If form submitted, collect email and password from form
                        if (isset($_POST['login'])) {
                            $name   = $_POST['name'];
                            $password = $_POST['password'];

                            // Check if a user exists with given username & password
                            $result = mysqli_query($mysqli, "select 'name', 'password' from user1
                                where name='$name' and password='$password'");

                            // Count the number of user/rows returned by query 
                            $user_matched = mysqli_num_rows($result);

                            // Check If user matched/exist, store user email in session and redirect to sample page-1
                            if ($user_matched > 0) {

                                $_SESSION["name"] = $name;
                                header("location: page-1.php");
                            } else {
                                echo "User email or password is not matched <br/><br/>";
                            }
                        }
                ?>
            </form>
        </div>
    </div>
    </body>
</html>