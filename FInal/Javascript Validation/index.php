<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./main.js"></script>
    <title>Javascript Validation</title>
</head>
<body>
    <form action="./success.php" id="form1" method="post" onsubmit="return verify()">
        <input type="text" name="name"    placeholder="input your name">
        <input type="text" name="contact" placeholder="input contact">
        <input type="text" name="age"     placeholder="enter your ege">
        <input type="email" name="email"     placeholder="enter your email">
        <input type="submit" value="submit">
    </form>
</body>
</html>