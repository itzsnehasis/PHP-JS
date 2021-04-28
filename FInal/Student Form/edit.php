<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./main.js"></script>
</head>
<body>
<?php
    include "connection.php";
    $sql = "SELECT * FROM `student2` WHERE `id` = '$_GET[eid]'";
    $res = $db->query($sql);
    $row = $res->fetch_array();
?>

<center>
    <form name="f1" method="POST" onkeyup="Ajax()">
    <input type="hidden" name="eid" value="<?php print $row['id']?>">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php print $row['name']?>"></td>
            </tr>
            <tr>
                <td>Contact</td>
                <td><input type="text" name="contact" value="<?php print $row['contact']?>"></td>
            </tr>
            <?php
                if($row['gender']=="male"){
                    print "
                        <tr>
                            <td>Gender</td>
                            <td><input type=radio value=male name=gender checked>Male
                            <input type=radio value=female name=gender>female
                            </td>
                        </tr>

                    ";
                } 
                else{
                    print "
                        <tr>
                            <td>Gender</td>
                            <td><input type=radio value=male name=gender>Male
                                <input type=radio value=female name=gender checked>female
                            </td>
                        </tr>

                    ";
                } 

            if($row['course']=="mca"){
                print "
                    <tr>
                        <td>Course</td>
                        <td>
                            <select name=course id=>
                                <option value=mca selected>MCA</option>
                                <option value=mba>MBA</option>
                            </select>
                        </td>
                    </tr>   

                ";
            }

            else{
                print "
                    <tr>
                        <td>Course</td>
                        <td>
                            <select name=course id=>
                                <option value=mca>MCA</option>
                                <option value=mba selected>MBA</option>
                            </select>
                        </td>
                    </tr>   

                ";
            }

            ?>
        </table>
    </form>
    <div id="mydiv"></div>
    <a href="./listing.php">Go to list</a>
</center>
</body>
</html>
