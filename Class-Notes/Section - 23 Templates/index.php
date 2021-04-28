<?php
include "lib/connection.php";
include "lib/header.php";
?>

<div class="products">
	   		     	<h5 class="latest-product">LATEST PRODUCTS</h5>	
	   		     	  <a class="view-all" href="product.html">VIEW ALL<span> </span></a> 		     
	   		     </div>
	   		     <div class="product-left">
	   		     	
	   		     	<?php
	   		     		$sql = "SELECT * FROM `products` ORDER BY `id` DESC LIMIT 10,6";
	   		     		$res = $db->query($sql);
	   		     		$c = 0;
	   		     		while($row = $res->fetch_array()) {
	   		     			$c++;

	   		     			if($c==3) {
	   		     				$class = "grid-top-chain";
	   		     			}
	   		     			else 
	   		     				$class = "";
	   		     			print '<div class="col-md-4 chain-grid '.$class.'">
	   		     		<a href="details.php?did='.$row['id'].'"><img class="img-responsive chain" src="'.$row['image'].'" alt=" " /></a>
	   		     		<span class="star"> </span>
	   		     		<div class="grid-chain-bottom">
	   		     			<h6><a href="details.php?did='.$row['id'].'">'.$row['name'].'</a></h6>
	   		     			<div class="star-price">
	   		     				<div class="dolor-grid"> 
		   		     				<span class="actual">Rs.'.$row['price'].'</span>
		   		     				
		   		     				  
	   		     				</div>
	   		     				<a class="now-get get-cart" href="details.php?did='.$row['id'].'">Details</a> 
	   		     				<div class="clearfix"> </div>
							</div>
	   		     		</div>
	   		     		</div>';
	   		     		}
	   		     	?>

	   		     	
	   		     	
	   		     	 <div class="clearfix"> </div>
	   		     </div>
<?php
include "lib/footer.php";


?>