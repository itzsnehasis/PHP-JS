<?php
session_start();
include "lib/connection.php";
include "lib/header.php";
?>

<div class="products">
	   		     	<h5 class="latest-product">View Cart</h5>	
   </div>	 
			<table CLASS = nikCart WIDTH = 100% STYLE = "border: 2px solid BLACK;padding: 10px;">
			<tr>
				<th>No.</th>
				<th colspan = 2> Product </th>
				<th>Price</th>
				<th>Quantity</th>
				<th>SubTotal</th>
				<th>Remove</th>
			</tr>
			<?php
			$c = 1;
			$total = 0;
			foreach($_SESSION['session_cart'] as $pid=>$quantity) {

				$sql = "SELECT * FROM `products` WHERE `id` = '$pid'";
				$res = $db->query($sql);
				$row = $res->fetch_array();
				$subtotal = $row['price'] * $quantity;
				$total += $subtotal;
				
				print '<tr>
					<td>'.$c.'</td>
					<td><IMG SRC = "'.$row['image'].'" WIDTH = 50></td>
					<td>'.$row['name'].'</td>
					<td>Rs.'.$row['price'].'</td>
					<td>'.$quantity.'</td>
					<td>'.$subtotal.'</td>
					<td><a href="add.php?del_id='.$pid.'">X Remove</a></td>
				</tr>';

			  	$c++;

			}

			?>
			
			
			<tr>
				<th colspan = 4></th>
				<th>TOTAL</th>
				<th>Rs. <?php print $total?></th>
				<th></th>
			</tr>
		</table>

		<DIV STYLE = "width: 100%; text-align: center;">
		
			<br> <br> 
				<a class="now-get" href="checkout.php">CheckOut</a> &nbsp; 
				<a class="now-get" href="#">Continue Shopping</a> 
		</DIV>
	<div class="clearfix"> </div>
<?php
include "lib/footer.php";
?>