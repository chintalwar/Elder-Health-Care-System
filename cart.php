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
    <?php

	if(isset($_POST['submit'])){
		
		foreach($_POST['quantity'] as $key => $val) {
			if($val==0) {
				unset($_SESSION['cart'][$key]);
			}else{
				$_SESSION['cart'][$key]['quantity']=$val;
			}
		}
		
	}

?>
<h1>View cart</h1>
<a href="cushome.php">Go back to products page</a> <br> <br>
<form method="post" action="login.php?page=cart">
    
	<table>
	    
		<tr>
		    <th>Name</th>
		    <th>Quantity</th>
		    <th>Price</th>
		    <th>Items Price</th>
		</tr>
		


        <form class="col-md-4 col-sm-offset-4 text-center" style="margin: 2%;background-color: #e3e8ef;border: 1px #e3e8ef;border-radius: 5%; opacity:0.9;filter: alpha(opacity=60);text-align: center;margin-left: 35%;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;margin-top: 4%" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
			  <div class="form-group center">
				<label for="user" style="font-weight: bold;color: #000000;">Customer Name:</label>
				<input type="text" class="form-control" id="user" name="uname" style="width:50%;margin-left: 24%;margin-top:-35px;" required>
			  </div>
			  
			  <div class="form-group">
				<label for="mbl" style="font-weight: bold;color: #000000;">Mobile:</label>
				<input type="text" class="form-control" id="mbl" pattern="[0-1]{2}[0-9]{9}" name="umobile" style="width:50%;margin-left: 24%;margin-top:-35px;" required>
			  </div>
			  <div class="form-group">
				<label for="adrs" style="font-weight: bold;color: #000000;">Address:</label>
				<input type="text" class="form-control" id="adrs" name="uaddress" style="width:50%;margin-left: 24%;margin-top:-35px;" required>
			  </div>
			  <div class="form-group center">
				    <label>Region:</label>
                    
                    <select name="region">
                        <option value="Uttara">Uttara</option>
                        <option value="Banani">Banani</option>
                        <option value="Mirpur">Mirpur</option>
                        <option value="Malibag">Malibag</option>
                    </select>
			  </div>



              <?php
			  error_reporting(0);
		
			$sql="SELECT * FROM medicine WHERE medId IN (";
					
					foreach($_SESSION['cart'] as $id => $value) {
						$sql.=$id.",";
					}
					
					$sql=substr($sql, 0, -1).") ORDER BY medName ASC";
					$query=mysqli_query($con,$sql);
					$totalprice=0;

					
					
					while($row=mysqli_fetch_array($query)){
						$subtotal=$_SESSION['cart'][$row['medId']]['quantity']*$row['price'];
						$totalprice+=$subtotal;
					?>
						<tr>
						    <td><?php echo $row['medName'] ?></td>
						    <td><input type="text" name="quantity[<?php echo $row['medId'] ?>]" size="5" value="<?php echo $_SESSION['cart'][$row['medId']]['quantity'] ?>" /></td>
						    <td><?php echo $row['price'] ?>$</td>
						    <td><?php echo $_SESSION['cart'][$row['medId']]['quantity']*$row['price'] ?>$</td>
						</tr>

                        <?php	
					$conn=mysqli_connect("localhost","root","","elder_health_care");
	               if(!$conn){
		              die("Connection failed: ".mysqli_connect_error);
	               }
	               else
                   
                   
                   if ($_SERVER["REQUEST_METHOD"] == "POST"){
                    $cuName=$_POST["uname"];
                    $cuMobile=$_POST["umobile"];
                    $cuAddress=$_POST["uaddress"];
                    $conn=mysqli_connect("localhost","root","","elder_health_care");
                       if(!$conn){
                          die("Connection failed: ".mysqli_connect_error);
                       }
                       else
                          //echo "Connected successfully <br>";
        
              
                   $sql1="insert into medicineorder(ordercusname,orderphone,orderaddress,medicinename,medprice,medquantity,orderregion) values('".$cuName."', '".$cuMobile."','".$cuAddress."','".$row['medName']."','".$row['price']."','".$_SESSION['cart'][$row['medId']]['quantity']."', '".$_POST['region']."')";
                   $result1= mysqli_query($conn,$sql1)or die(mysqli_error($conn));
                           if($result1){
                        }
                        else
                        {
                           
                            $message = "Registration Unsuccessful!";
                             echo "<script type='text/javascript'>alert('$message');</script>";
                        }
           
                        
                        }   
                        
 
                     
                     ?>
                     
 
                         
                         
                     <?php
                         
                     }
         ?>
         
         
                     <tr>
                         <td>Total Price: <?php echo $totalprice ?></td>
                     </tr>
         
     </table>
     
     
     <br>
     
     
     
     
     
         <button type="submit" onclick="myFunction()" class="btn btn-default">Confirm Order</button>
 
         <script>
         function myFunction() {
             alert("Congratulations !! Your order has been placed. We will deliver your medice very soon. ");
         }
         </script>
         
                 <br>
                 
             </form> 
        </body>
        </html>    