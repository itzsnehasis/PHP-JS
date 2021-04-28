<?php
include "lib/header.php";
?>
<div class="products">
	   		<h5 class="latest-product">Checkout Form</h5>	
   </div>	 
 <div class="clearfix"> </div>			 

  <form method = "post" action = "order.php" name = "frm"> 
	 <div class="  register-top-grid">
		<h3>BILLING INFORMATION</h3>
		<div class="mation">
			<span>FullName<label>*</label></span>
			<input type="text" name = "cust_name"> 
		
			<span>Phone<label>*</label></span>
			<input type="text" name = "cust_phone"> 
		 
			 <span>Email<label>*</label></span>
			 <input type="text" name = "cust_email"> 

			 <span>Address<label>*</label></span>
			 <textarea name = "cust_address" style = "width: 560px; border-color: silver;"></textarea> 
		</div>
		 <div class="clearfix"> </div>
		   <a class="news-letter" href="#">
			 <label class="checkbox"><input type="checkbox" name="checkbox" onclick = "clickme()"><i> </i>Same As Above</label>
		   </a>
		 </div>
		 <div class="  register-bottom-grid">
				<h3>SHIPPING INFORMATION</h3>
				<div class="mation">
			<span>FullName<label>*</label></span>
			<input type="text" name = "delivery_name" > 
		
			<span>Phone<label>*</label></span>
			<input type="text" name = "delivery_phone"> 
		 
			<span>Address<label>*</label></span>
			<textarea name = "delivery_address" style = "width: 560px; border-color: silver;"></textarea> 
		</div>
	</div>
		<div class="  register-bottom-grid">
				<h3>PAYMENT INFORMATION</h3>
				<div class="mation">
			
			<input type="radio" name = "payment_info" value = "COD"> 
			COD
			<br>
			<input type="radio" name = "payment_info" value = "online"> 
		 	ONLINE
			
		</div>
		 
</div>
	<br>
	<input type="submit" class = nikPinkButton value="submit">

	</form>
	<div class="clearfix"> </div>

	<script type="text/javascript">
		function clickme() {
			var check = frm.checkbox.checked;
			//alert(check);

		if(check) {
			frm.delivery_name.value = frm.cust_name.value;
			frm.delivery_phone.value = frm.cust_phone.value;
			frm.delivery_address.value = frm.cust_address.value;
		}
		else {
			frm.delivery_name.value = "";
			frm.delivery_phone.value = "";
			frm.delivery_address.value = "";
		}

		}
		
	</script>
<?php
include "lib/footer.php";
?>