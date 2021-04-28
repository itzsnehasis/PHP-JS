<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function verify(){
            name     = document.f1.name.value;
            age      = document.f1.age.value;
            email    = document.f1.email.value;
            password = document.f1.password.value;

            //name validation 
            if(name == ''){
                alert('Enter Name');
                document.f1.name.focus();
                return false;
            }

            //age validation
            if(age == ''){
                alert('Enter Age');
                document.f1.age.focus();
                return false;
            }

            if(isNaN(age)){
                alert('Enter Age Properly');
                document.f1.age.focus();
                return false;
            }

            //email validation
            if(email == ''){
                alert('Enter email');
                document.f1.email.focus();
                return false;
            }

            pos1 = email.indexOf('@',0);
            pos2 = email.indexOf('.',pos1+1);
            if(pos1 < 1 || pos2 < 1){
                alert('Enter Email Correctly');
                document.f1.email.focus();
                return false;
            }

            //Password Validation
            if(password == ''){
                alert('Enter Password');
                document.f1.password.focus();
                return false;
            }

            special_char       = ["!", "@", "#", "$", "%", "&", "*", "_"];
            special_char_found = false;
            for(i = 0; i < special_char.length; i++){
                if(password.indexOf(special_char[i],0) >= 0)
                    special_char_found = true;
            }
            if(special_char_found == false){
                alert('Enter Atleast One Special Special Charecter');
                document.f1.password.focus();
                return false;                
            }

            if(password.length < 8){
                alert('Enter Atleast minimum 8 charecter');
                document.f1.password.focus();
                return false;
            }

            number_found = false;
            for(i = 0; i < password.length; i++){
                number = password.charCodeAt(i);
                if(number<=57 && number>=48)
                    number_found = true;
            }
            if(number_found == false){
                alert('Enter Atleast one number');
                document.f1.password.focus();
                return false;
            }
            

            //If All Condition Validated 
            return true;
        }
    </script>
</head>
<body>
    <form action = "suc.php" name = "f1" onsubmit = " return verify()">
        <table>
            <tr align = right>
                <td>Enter Name : </td>
                <td><input type = "text" name = "name"></td>
            </tr>
            <tr align = right>
                <td>Ente Age : </td>
                <td><input type = "text" name = "age"></td>
            </tr>
            <tr align = right>
                <td>Enter Email : </td>
                <td><input type = "text" name = "email"></td>
            </tr>
            <tr align = right>
                <td>Enter Password : </td>
                <td><input type = "text" name = "password"></td>
            </tr>
            <tr align = right>
                <td><input type="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>