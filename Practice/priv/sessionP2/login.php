<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<center>
    <form action = "loginResponse.php" method = "post">
        <table border = "2px">
            <tr>
                <td>Email</td>
                <td><input type = "email" name = "email" required></td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input type = "password" name = "password" required></td>
            </tr>
        </table>
        <br><br>
        <input type = "submit" value = "submit" name = "submit">
    </form>
</center>
</body>
</html>