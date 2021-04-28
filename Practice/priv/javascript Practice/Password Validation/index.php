<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./main.js"></script>
    <title>Login</title>
</head>
<body>
    <center>
        <form action="./success.php" onsubmit="return verify()">
            <table bgcolor=silver cellpadding=10 style="border-radius: 10px;">
                <tr><td><input type="text" placeholder="Input Your Username"     required></td></tr>
                <tr><td><input type="password" placeholder="Input Your password" required id="password"></td></tr>
                <tr><td><input type="submit" value="Login"></td></tr>
            </table>
        </form>
    </center>
</body>
</html>