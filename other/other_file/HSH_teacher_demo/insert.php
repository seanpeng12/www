<hr>
<form action="index.php?m=insert" method="post">
    <table border="1" width="500px">
        <input type="hidden" name="method" value="insert">
        <tr>
            <td>求才廠商</td> 
            <td><input type="text" name="supplier"></td>
        </tr>
        <tr>
            <td>求才內容</td> 
            <td><textarea name="content" rows="3" placeholder="求才內容"></textarea></td>
        </tr>
        <tr>
            <td>求才日期</td>  
            <td><input type="text" name="date" value="<?php echo date()?>" readonly></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit">新增</button></td>
        </tr>
    </table>
</form>

<hr>
    <?php
        if(isset($_POST['method']) && ($_POST['method']) == "insert"){
            $sql = "INSERT INTO 'job _seeker' ('supplier','content','date') VALUES
            ('{$_POST["supplier"]}','{$_POST["content"]}','{$_POST["date"]}');";
            if(mysqli_query($db,$sql)){
                echo "新增成功";
            }else{
                echo "新增失敗";
            }
        }
    ?>
<hr>