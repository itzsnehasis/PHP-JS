<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <?php
        include "./connection.php";
        include "./session.php";
    ?>
    <center>
    <form action = "regResponse.php" method = "POST">
        <table border = "2px">
            <tr>
                <td>Name</td>
                <td><input type = "text" name = "name" required></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type = "email" name = "email" required></td>
            </tr>

            <tr>
                <td>Address</td>
                <td><textarea cols="20" rows="5" name = "address" required></textarea></td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input type="password" name = "password" required></td>
            </tr>
        </table>
        <br><br>    
        <input type="submit" name = "submit" value = "submit">
    </form>
    </center>

</body>
</html>