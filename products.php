<?php
	if(isset($_GET['action']) && $_GET['action']=="add"){
		
		$id=intval($_GET['id']);
		
		if(isset($_SESSION['cart'][$id])){
			
			$_SESSION['cart'][$id]['quantity']++;
			
		}else{
			
			$sql_s="SELECT * FROM medicine
				WHERE medId={$id}";
			$query_s=mysqli_query($con,$sql_s);
			if(mysqli_num_rows($query_s)!=0){
				$row_s=mysqli_fetch_array($query_s);
				
				$_SESSION['cart'][$row_s['medId']]=array(
						"quantity" => 1,
						"price" => $row_s['price']
					);
				
				
			}else{
				
				$message="This product id it's invalid!";
				
			}
			
		}
		
	}

?>
	<h1>Product List</h1>
	<?php
		if(isset($message)){
			echo "<h2>$message</h2>";
		}
	?>
	<div class="result_table" style="margin-left: 2%;text-align: center">
			<table class="table">
			    <tr>
			        <th scope="col">Name</th>
			        <th scope="col">Description</th>
			        <th scope="col">Price</th>
			        <th scope="col">Action</th>
			    </tr>
				<tr>
					<td>Ace</td>
					<td>Fever</td>
					<td>30$</td>
					<td><a style="background:#3BB1E4;color:black;padding:7px" href="cart_index.php?page=products&action=add&id=<?php echo $row['medId'] ?>">Add to cart</a></td>
	            </tr>
				<tr>
					<td>Fenadin</td>
					<td>Cough</td>
					<td>200$</td>
					<td><a style="background:#3BB1E4;color:black;padding:7px" href="cart_index.php?page=products&action=add&id=<?php echo $row['medId'] ?>">Add to cart</a></td>
	            </tr>
				<tr>
					<td>Histasin</td>
					<td>Cold</td>
					<td>0$</td>
					<td><a style="background:#3BB1E4;color:black;padding:7px" href="cart_index.php?page=products&action=add&id=<?php echo $row['medId'] ?>">Add to cart</a></td>
	            </tr>
				<tr>
					<td>Napa</td>
					<td>Fever</td>
					<td>20$</td>
					<td><a style="background:#3BB1E4;color:black;padding:7px" href="cart_index.php?page=products&action=add&id=<?php echo $row['medId'] ?>">Add to cart</a></td>
	            </tr>
			    
			    
			    
				<?php
				error_reporting(0);
				
					$sql="SELECT * FROM medicine ORDER BY medName ASC";
					$query=mysqli_query($conn,$sql);
					
					while ($row=mysqli_fetch_array($query)) {
						
				?>
						<tr>
						    <td><?php echo $row['medName'] ?></td>
						    <td><?php echo $row['diseaseCategory'] ?></td>
						    <td><?php echo $row['price'] ?>$</td>
						    
						</tr>
				<?php
						
					}
				
				?>
			    
			</table>