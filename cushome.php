<?php
session_start();
?>
<!DOCTYPE html>

<head>
    <link rel="icon" type="image/jfif" href="care.jfif" size="18*18">

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/bootstrap.css"/>
	
	<title>User Home -Elder HEalth care system</title>
    
	
</head>
<body>

	<nav>
		<label class="logo">Welcome To Elder Health Care System..!!</label>
		<ul>
			<li><a href="logout.php">Logout</a></li>
			<li><a href="cart_index.php">Cart</a></li>
			<li><a href="page-1.php">Back</a></li>
	   </ul>
   
    </nav><br><br>
	
	<h1 style="text-align:center">Welcome <?php echo $_SESSION ['name']; ?></h1>
	<form class="col-md-4 col-sm-offset-4 text-center" style="margin: 2%;text-align: center;margin-left: 35%;padding-top: 2%;padding-bottom: 2%;" method="post" action=cushome2.php >
<center>
	 <div>
                    
                    <input style="width:250px;height:35px;background:transparent;border:1px solid black;" type="text" name="search" placeholder="Search medicine">

                    <button type="submit" style="background:#56CDF0;border:1px solid #56CDF0;padding:6px 20px;border-radius:5px;" class="btn btn-default">Search</button>
                    <br>
    </div>
	</center>
	<div class="result_table" style="margin-left: 2%;text-align: center">
	<table class="table">
  <thead>
    <tr>
      <th scope="col">price</th>
      <th scope="col">Id</th>
      <th scope="col">Medicine Name</th>
      <th scope="col">Scientific Name</th>
	  <th scope="col">Disease Categories</th>
    </tr>
  </thead>
  <tbody>
                    <?php
					        {
								//$str1=$_POST["search"];
		                        $conn=mysqli_connect("localhost","root","");
								// Make sure we connected successfully
								if(! $conn)
								   {
									die('Connection Failed'.mysql_error());
									}
									// Select the database to use
									mysqli_select_db($conn,'elder_health_care');
									//$row = mysqli_fetch_array($result);
									$result = mysqli_query($conn,"SELECT * FROM medicine;") or die("Failed to fetch".mysql_error());
									if( mysqli_num_rows( $result)==0 ){
										$result1 = mysqli_query($conn,"SELECT * FROM medicine where medName='".$str1."';") or die("Failed to fetch".mysql_error()); 
										if( mysqli_num_rows( $result1)==0 ){
											echo '<tr><td colspan="5">No Rows Returned</td></tr>';
										}else{
											while( $row = mysqli_fetch_assoc( $result1) ){
												echo "<tr><td>{$row['price']}</td><td>{$row['medId']}</td><td>{$row['medName']}</td><td>{$row['scienteficName']}</td><td>{$row['diseaseCategory']}</td></tr>\n";
										}
										}
									 }
									 else{
										while( $row = mysqli_fetch_assoc( $result) ){
											echo "<tr><td>{$row['price']}</td><td>{$row['medId']}</td><td>{$row['medName']}</td><td>{$row['scienteficName']}</td><td>{$row['diseaseCategory']}</td></tr>\n";
												}
											}
										 } 
					
                    ?>
	</tbody>
  <table>
    </div>
</form>
</body>
</html>
    