<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/jfif" href="care.jfif" size="18*18">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title> Singup -To Elder Health care</title>
</head>
<body>
    <nav>
         <label class="logo">Welcome To Elder Health Care System..!!</label>
         <ul>
             <li><a class="active" href="home.php">Home</a></li>
        </ul>
    </nav>
    <div class="container">
    
    <div class="col-lg-10 m-auto">

           <form action="signup.php" method="POST" name="form1">
               <div class="card">
                   <div class="card-header bg-dark">
                       <h1 class="text-white text-center"> Sign Up<h1>
                    
                    </div>
                    <lable> NAME </lable>
                    <input type="text" name="name" class="form-control" required><br>

                    <lable> AGE </lable>
                    <input type="text" name="age" class="form-control" required><br>

                    <lable> EMAIL </lable>
                    <input type="email" name="email" class="form-control" required><br>

                    <lable> CONTACT </lable>
                    <input type="text" name="contact" class="form-control" required><br>

                    <lable> PASSWORD </lable>
                    <input type="password" name="password" class="form-control" required><br>

                    
					<input type="checkbox" id="lg_remember" name="lg_remember" required>
					<a href="term.php">Term and Conditions</a>
					
                    <br>
                    <button class="btn btn-primary btn-lg" type="submit" name="done" value="done">Sign Up</button>
                    <p>Already have an account?<a href="login.php">Login</a></p>
               </div>

               <?php

        //including the database connection file
        include_once("conn.php");
        error_reporting(0);

        // Check If form submitted, insert user data into database.
        if (isset($_POST['done'])) {
            $name     = $_POST['name'];
            $age      =$_POST['age'];
            $email    = $_POST['email'];
            $contact  =$_POST['contact'];
            $password = $_POST['password'];

            // If email already exists, throw error
            $email_result = mysqli_query($mysqli, "select 'name' from user1 where name='$name' and password='$password'");

            // Count the number of row matched 
            $user_matched = mysqli_num_rows($email_result);

            // If number of user rows returned more than 0, it means email already exists
            if ($user_matched > 0) {
                echo "<br/><br/><strong>Error: </strong> User already exists with the name id '$name'.";
            } else {
                // Insert user data into database
                $result   = mysqli_query($mysqli, "INSERT INTO user1 (name,age,email,contact,password) VALUES('$name','$age','$email','$contact','$password')");

                // check if user data inserted successfully.
                if ($result) {
                    echo "<br/><br/>User Registered successfully.";
                } else {
                    echo "Registration error. Please try again." . mysqli_error($mysqli);
                }
            }
        }

        ?>
               
           </form>

    </div>
</div>
    
</body>
</html>

















































