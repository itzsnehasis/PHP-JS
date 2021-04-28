<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function check_valid(){
            var name    = document.f1.name.value;
            var age     = document.f1.age.value;
            var email   = document.f1.email.value;
            var pos1    = email.indexOf('@',0);
            var pos2    = email.indexOf('.',pos1+1);
            

            if(name == ''){
                alert('Enter Name Plz');
                document.f1.name.focus();
                return false;
            }

            if(age == ''){
                alert('Enter age Plz');
                document.f1.age.focus();
                return false;
            }

            if(isNaN(age)){
                alert('Enter age correctly Plz');
                document.f1.age.focus();
                return false;
            }

            if(email == ''){
                alert('Enter Email Plz');
                document.f1.email.focus();
                return false;
            }

            if(pos1 < 0 || pos2 < 0) {
                alert('Enter a valid Email Plz');
                document.f1.email.focus();
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <form name = "f1" action = "suc.php" onsubmit = "return check_valid()">
        <table>
            <tr>
                <td>Enter Name : <input type = "text" name = "name"></td>
            </tr>
            <tr>
                <td>Enter Age  &nbsp&nbsp&nbsp: <input type = "text" name = "age"></td>
            </tr>
            <tr>
                <td>Enter Email : <input type = "text" name = "email"></td>
            </tr>
            <tr>
                <td><input type = "submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>