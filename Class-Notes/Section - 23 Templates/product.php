<?php
include "lib/connection.php";
include "lib/header.php";

?>
<div class="products">
	   		     	<h5 class="latest-product">Products</h5>	
			</div>	 
	
		<table >
		<tr>
			<td>
			
		<!-- grids_of_4 -->
		<div class="grid-product">
				<?php
					$sql = "SELECT * FROM `products` WHERE `cid` = '$_GET[pid]'";
					$res = $db->query($sql);
					while($row = $res->fetch_array()) {
						print '<div class="  product-grid" style = "width:120px;">
			<div class="content_box"><a href="details.php?did='.$row['id'].'">
			   	<div class="left-grid-view grid-view-left">
			   	   	 <img src="'.$row['image'].'" class="img-responsive" alt=""/>
				   	   	<div class="mask">
	                        <div class="info">Quick View</div>
			            </div>
				   	  </a>
				   </div>
				    <h4><a href="details.php?did='.$row['id'].'"> '.$row['name'].'</a></h4>
				     
				     Rs. '.$row['price'].'
			   	</div>
             </div> ';
					}

				?>

		  
			 
	</div>
	</div>
	<!---->
			</td>
		</tr>
		</table>

<?php
include "lib/footer.php";

?>