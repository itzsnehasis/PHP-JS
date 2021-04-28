Destroy.php
<hr>
<?php

setcookie("msg","",0);
print "Message is ".$_COOKIE['msg'];
?>
<hr>
<a href = "one.php">One</a>  || <a href = "two.php">Two</a> || <a href = "destroy.php">Destroy</a>