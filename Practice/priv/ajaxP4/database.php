
    <?php
        function setcolor($str){
            $keyword = $_GET['keyword'];
            return str_ireplace($keyword, "<span style = \"background-color: pink; color : black\">
                   $keyword</span>", $str);
        }
        if(isset($_GET['keyword'])){
            $db  = new mysqli("localhost", "root", "", "school");
            $sql = "SELECT *  FROM `student` WHERE `name` LIKE '$_GET[keyword]%'";
            $res = $db->query($sql);
            while($row = $res->fetch_object()){
                if($row != ""){
                    $name = $row->name;
                    print "
                        <table cellpadding = 10px align = center bgcolor = silver> 
                            <tr>
                                <td>ROll</td>
                                <td>Name</td>
                                <td>Marks</td>
                            </tr>
                            <tr bgcolor = white>
                                <td>$row->roll</td>
                                <td>".setcolor($name)."</td>
                                <td>$row->marks</td>
                            </tr>
                        </table>
                    ";
                }
                else
                    print "nothing Found";
            } 
        }
        else {
            $db  = new mysqli("localhost", "root", "", "school");
            $sql = "SELECT *  FROM `student`";
            $res = $db->query($sql);
            while($row = $res->fetch_array()){
                print "
                    <table cellpadding = 10px align = center bgcolor = silver> 
                        <tr>
                            <td>ROll</td>
                            <td>Name</td>
                            <td>Marks</td>
                        </tr>
                        <tr bgcolor = white>
                            <td>$row[roll]</td>
                            <td>$row[name]</td>
                            <td>$row[marks]</td>
                        </tr>
                    </table>
                ";
            }  
        }
    ?>