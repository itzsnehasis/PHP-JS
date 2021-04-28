<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function password_verify(){
            var password          = document.f1.password.value;
            var special_chars     = ["@", "*", "&", "_", "$", "#", "!"];
            var find_special_char = false;
            var number_found      = false;
            var ucfound           = false;
            var lcfound           = false;
            for(i = 0; i < special_chars.length; i++){
                if (password.indexOf(special_chars[i],0) >= 0)
                    find_special_char = true;
            }
            for(i=0; i<password.length; i++) {
                var ascii = password.charCodeAt(i); 
                if(ascii>=48 && ascii<=57)   //0 is 48, 9 is 57
                    number_found = true;
            }

            for(i=0; i<password.length; i++) {
                var ascii = password.charCodeAt(i); 
                if(ascii>=65 && ascii<=90)   //0 is 48, 9 is 57
                    ucfound = true;
            }

            for(i=0; i<password.length; i++) {
                var ascii = password.charCodeAt(i); 
                if(ascii>=97 && ascii<=122)   //0 is 48, 9 is 57
                    lcfound = true;
            }


            if (password == ''){
                alert('Enter Password');
                document.f1.password.focus(); 
                return false;                 
            }

            if(find_special_char == false){
                alert ('Add any special charecter in your password');
                document.f1.password.focus();
                return false;
            }

            if(password.length < 8){
                alert('Minimum 8 Charecters');
                document.f1.password.focus();
                return flase;
            }

            if(number_found == false){
                alert('Add minimum one number');
                document.f1.password.focus();                
                return false;
            }

            if(ucfound == false){
                alert('Add minimum one uppercase');
                document.f1.password.focus();                
                return false;
            }

            if(lcfound == false){
                alert('Add minimum one lowercase');
                document.f1.password.focus();                
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <script>
        alert(charCodeAt(9));
    </script>
    <form name =  "f1" action = "suc.php" onsubmit = " return password_verify()">
        Enter Password : <input type = "text" name = "password">
                         <input type="submit">
    </form>
</body>
</html>