<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
</head>
<body>
    <center>
        <form action="./response.php" method="POST" >
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td><input type="text" name="contact"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><input type="radio" value="male" name="gender">Male
                    <input type="radio" value="female" name="gender">female
                    </td>
                </tr>
                <tr>
                    <td>Course</td>
                    <td>
                        <select name="course" id="">
                            <option value="mca">MCA</option>
                            <option value="mba">MBA</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>