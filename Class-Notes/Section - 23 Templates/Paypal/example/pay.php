<?php
//Insert in your db $_POST[fullname], $_POST[email]...
?>
<BODY ONLOAD = "document.f1.submit();">

	<CENTER>
	<BR><BR>	<IMG SRC = "ajax_loading.gif">
	<BR> Please wait, contacting PayPal. 

<FORM NAME = f1 ACTION="https://www.paypal.com/cgi-bin/webscr" METHOD="POST">

<INPUT TYPE="hidden" NAME="cmd" VALUE="_xclick">
<INPUT TYPE="hidden" NAME="business" VALUE="info@biriyanimahal.com">
<INPUT TYPE="hidden" NAME="item_name" VALUE="Biriyani">
<INPUT TYPE="hidden" NAME="quantity" VALUE="<?=$_POST['quantity']?>">
<INPUT TYPE="hidden" NAME="amount" VALUE="100">

<INPUT TYPE="hidden" NAME="discount_rate" VALUE="10">
<INPUT TYPE="hidden" NAME="discount_rate2" VALUE="50">

<INPUT TYPE="hidden" NAME="shipping" VALUE="50"> 
<INPUT TYPE="hidden" NAME="tax_rate" VALUE="28">

<input type="hidden" name="return" value="http://biriyanimahal.com/payment_thank_you.php">
<input type="hidden" name="cancel_return" value="http://freshersindia.com/go2hell.php">

<INPUT TYPE="SUBMIT" VALUE = "Pay on PayPal">
</FORM>
</CENTER>