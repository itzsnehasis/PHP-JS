<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <script src="./main.js"></script>
</head>
<body>
    <center>
        <form action="./success.php" id="validationform" onsubmit=" return verify()">
            <table bgcolor=silver cellspacing=20 style="border-radius: 10px;">
                <tr><td><input type="text" placeholder="Input Your Name"    id="name"></td></tr>
                <tr><td><input type="text" placeholder="Input Your Age"     id="age"></td></tr>
                <tr><td><input type="text" placeholder="Input Your email"   id="email"></td></tr>
                <tr><td><input type="text" placeholder="Input Your Contact" id="contact"></td></tr>
                <tr><td><input type="submit" value="submit"></td></tr>
            </table>
        </form>
    </center>
</body>
</html>