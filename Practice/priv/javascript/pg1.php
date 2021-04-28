<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_GET['page']))
            $page = $_GET['page'];
        else
            $page = 1;

        $db           = new MySQLi("localhost", "root", "", "development");
        $sql          = "SELECT * FROM `JobSeekers`;";
        $res          = $db->query($sql);
        $totalRecords = $res->num_rows;
        $totalPages   = ceil($totalRecords/10);
    ?>
    <center>
    <table bgcolor = silver cellpadding = 10px>
    <tr>
        <td>ID</td>
        <td>Full Name</td>
        <td>Qualification</td>
        <td>Gender</td>
        <td>City</td>
    </tr>
        <?php
            $start = 10*($page-1); 
            $db    = new MySQLi("localhost", "root", "", "development");
            $sql   = "SELECT * FROM `JobSeekers` LIMIT $start,10;";
            $res   = $db->query($sql);
            while($row = $res->fetch_array()){
                print "
                    <tr bgcolor = white>
                        <td>$row[id]</td>
                        <td>$row[fullname]</td>
                        <td>$row[qualification]</td>
                        <td>$row[gender]</td>
                        <td>$row[city]</td>
                    </tr>
                ";
            }  
        ?>
    </body>
    </table>
    <?php
        $priv   = $page -1;
        if($page > 0){
            print "<a href = pg1.php?page=$priv>Priv&nbsp;</a>";
        }

        for($i = 1; $i <= $totalPages; $i++){
            print "<a href = pg1.php?page=$i>$i&nbsp;</a>";
        }


        $next   = $page + 1;
        if($page < $totalPages ){
            print "<a href = pg1.php?page=$next>Next</a>";
        }

    ?>
    </ceneter>
</html>