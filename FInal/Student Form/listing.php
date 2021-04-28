<center>   
<?php
    include"connection.php";
    $sql = "SELECT * FROM `student2`";
    $res = $db->query($sql);
    print "
        <table bgcolor=silver>
            <tr>
                <td>Name</td>
                <td>Contact</td>
                <td>Gender</td>
                <td>Course</td>
                <td>Edit</td>
            </tr>
    ";
    while($row=$res->fetch_array()){
        print "
        <tr bgcolor= white>
            <td>$row[name]</td>
            <td>$row[contact]</td>
            <td>$row[gender]</td>
            <td>$row[course]</td>
            <td><a href=edit.php?eid=$row[id]>edit</a></td>
        </tr>
        ";
    }
    print "</table>";

?>
</center>