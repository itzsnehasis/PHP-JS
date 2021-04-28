One.php
<hr>
<?php
$time = time()+60;
setcookie("msg","Hello World",$time);

print "Message is ".$_COOKIE['msg'];
?>
<hr>
<a href = "one.php">One</a>  || <a href = "two.php">Two</a>  || <a href = "destroy.php">Destroy</a>