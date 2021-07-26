<?php
	session_start();
	include_once("conn.php");
	if(isset($_GET['page'])){
		
		$pages=array("products", "cart");
		
		if(in_array($_GET['page'], $pages)) {
			
			$_page=$_GET['page'];
			
		}else{
			
			$_page="products";
			
		}
		
	}else{
		
		$_page="products";
		
	}

?>
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
    <title>Add To Cart-Elder_Health_Care</title>
</head>
<body>

	<nav>
		<label class="logo">Welcome To Elder Health Care System..!!</label>
		<ul>
			<li><a href="logout.php">Logout</a></li>
			<li><a href="#">Cart</a></li>
			<li><a href="cushome.php">Back</a></li>
	   </ul>
    </nav><br><br>
    <div id="container">

		<div id="main">
			
			<?php require($_page.".php"); ?>

		</div><!--end of main-->
        <div id="sidebar">
			<h1>Cart</h1>
			<?php
			error_reporting(0);
				if(isset($_SESSION['cart'])){
					
					$sql="SELECT * FROM medicine WHERE medId IN (";
					
					foreach($_SESSION['cart'] as $id => $value) {
						$sql.=$id.",";
					}
					
					$sql=substr($sql, 0, -1).") ORDER BY medName ASC";
					$query=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_array($query)){
						
					?>
						<p style="padding:7px;font-weight:bold;font-size:15px;"><?php echo $row['medName'] ?> x <?php echo $_SESSION['cart'][$row['medId']]['quantity'] ?></p>
					<?php
						
					}
				?>
                <hr />
					<a style="background:#3BB1E4;color:black;padding:10px;" href="page=cart">Go to cart</a>
				<?php
					
				}else{
					
					echo "<p>Your Cart is empty. Please add some products.</p>";
					
				}
				
			//session_destroy();
			?>
			
			
		</div><!--end of sidebar-->
		
		
		

	</div><!--end container-->
<div>
</div>
</body>
</html>