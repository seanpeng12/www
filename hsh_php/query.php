
    <?
    $searchtxt=$_GET["searchtxt"];
    ?>
    <form action="index.php" method=get>
        <input type="hidden" name="method" value="query">
        <p align=center><input type=text name="searchtxt" value="<?echo $searchtxt?>">
            <input type="submit" value="搜尋學號與姓名"></p>
    </form>
    <table  width="85%" align=center>
        <tr class="ListCap" align=center>
            <td>求才廠商</td>
            <td>求才內容</td>
            <td>功能</td>
        </tr>
    
    <?
    $link=mysql_connect("localhost","root","badman0602");
    mysql_select_db("temp",$link);
    if(empty($searchtxt)){
        $sql="select * from job";
    }
    else{
        $sql="select * from job where content like '%$searchtxt%' or company like '%$searchtxt%'";
    }
    $rs=mysql_query($sql,$link);
    while($record=mysql_fetch_row($rs)){
        echo"<tr align=center><td>$record[1]</td><td>$record[2]</td>";
        echo"<td><a href=index.php?method=update&postid=$record[0]>[修改]</a>.<a href=index.php?method=delete&postid=$record[0]>[刪除]</a>";
    }
    mysql_close($link);
    ?>

</table>