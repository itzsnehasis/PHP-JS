<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Captcha</title>
  </head>
  <body>
  <center>
    <?php
      session_start();
      if(isset($_POST['cap'])){
        if($_POST['cap'] == $_SESSION['captcha'])
          header("location: captchasuc.php");
        else
          header("location: index.php");
      }
    ?>
    <br>
    <img src = "captcha.php">
    <form action="" method="post">
      <input type = "text"   name  = "cap" placeholder = "Type Captcha" required>
      <input type = "submit" name  = "btn" value = "submit">
    </form>
  </center>
  </body>
</html>
