<?php
    if(strlen($_GET['studentName'])<1)
        die();
    $db  = new mysqli("localhost", "root", null, "school");
    $sql = "SELECT * FROM `student` WHERE `name` LIKE '%$_GET[studentName]%'";
    $res = $db->query($sql);
    if(mysqli_num_rows($res)>0){
        print"
            <table bgcolor=silver cellpadding=10>
                        <tr>
                            <td>Roll</td>
                            <td>Name</td>
                            <td>Marks</td>
                        </tr>";
    }
    if(mysqli_num_rows($res)<1)
        print "Nothing Found :(";
        
        while($row = $res->fetch_array()){
                    print "
                        <tr bgcolor=white>
                            <td>$row[id]</td>
                            <td>$row[name]</td>
                            <td>$row[marks]</td>
                        </tr>
                    ";
        }
    print "</table>";
?>

