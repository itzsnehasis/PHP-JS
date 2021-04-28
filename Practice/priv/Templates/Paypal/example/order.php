<HTML>
		<BODY>
			<CENTER>
			<H1>Checkout</H1>

			<FORM ACTION = pay.php METHOD = POST>
			<BR> Fullname <INPUT TYPE = TEXT NAME = fullname>
			<INPUT TYPE = HIDDEN NAME = quantity VALUE = "<?php print $_POST['quantity'];?>">
			<BR> Email <INPUT TYPE = TEXT NAME = email>
			<BR> Phone <INPUT TYPE = TEXT NAME = phone>
			<BR> Address <INPUT TYPE = TEXT NAME = address>
			<BR><INPUT TYPE = SUBMIT VALUE = " Proceed to Pay ">
			</FORM>

		</CENTER>