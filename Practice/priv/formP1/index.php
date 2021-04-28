<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School</title>
</head>
<body>
    <center>
        <form action = "formRes.php" method = "post">
            <table cellspacing = 10>
                <tr>
                    <td>Name</td>
                    <td><input type = "text" name = "name" required></td>
                </tr>

                <tr>
                    <td>marks</td>
                    <td><input type = "number" name = "marks" required></td>
                </tr>
                <tr>
                    <td>Book</td>
                    <td>
                        <select name = "book" required>
                            <option value = "1">Physics</option>
                            <option value = "2">chemistry</option>
                            <option value = "3">Biology</option>
                        </select>
                    </td>
                </tr>
            </table>
            <hr>
            <input type = "submit" name = "submit">
        </form>
    </center>
</body>
</html>
