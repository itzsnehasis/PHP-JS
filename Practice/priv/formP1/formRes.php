<?php
    $db = new mysqli("localhost", "root", NULL, "student");

    if(isset($_POST['submit'])){
        $sql = "INSERT INTO `student` (`roll`, `name`, `marks`, `book`) VALUES (NULL, '$_POST[name]', '$_POST[marks]', '$_POST[book]')";
        $db->query($sql);
    }
?>

<center>
    <table border = "2px">
        <tr>
            <td>Roll</td>
            <td>Name</td>
            <td>Marks</td>
            <td>Book</td>
        </tr>
        <?php
            $db  = new mysqli("localhost", "root", NULL, "student");
            $sql = "SELECT * FROM `student`, `lib` WHERE `student`.`book` = `lib`.`lid`";
            $res = $db->query($sql);
            while($row = $res->fetch_array()){
                print "
                    <tr>
                        <td>$row[roll]</td>
                        <td>$row[name]</td>
                        <td>$row[marks]</td>
                        <td>$row[book]</td>
                    </tr>
                ";
            } 
 
        ?>
    </table>
    <br><br><br>
    <a href = "index.php">Back</a>
</center>