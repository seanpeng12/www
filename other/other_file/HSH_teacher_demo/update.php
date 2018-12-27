<?php
$sql = "SELECT * FROM'job_seeker' WHERE 'post_id' = '{$_GET['id']}';"; 
$result = mysqli_query($db,$sql);
$rows =mysqli_fetch_row($result);

?>
<hr>
<form action="index.php?m=update" method="post">
    <table border="1" width="500px">
        <input type="hidden" name="method" value="update">
        <tr>
            <td>公告編號</td> 
            <td><input type="text" name="post_id" value="<?=$rows[0];?>" readonly></td>
        </tr>
        <tr>
            <td>求才廠商</td> 
            <td><input type="text" name="supplier" value="<?=$rows[1];?>"></td>
        </tr>
        <tr>
            <td>求才內容</td>  
            <td><textarea name="content" rows="3" placeholder="求才內容"><?=$rows[2];?></textarea></td>
        </tr>
        <tr>
            <td>求才日期</td>
            <td><input type="text" name="data" value="<?=$rows[3];?>"></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit">修改</button></td>
        </tr>
    </table>
</form>
<hr>
<?php
if(isset($_POST['method']) && ($_POST['method']) == "update"){
    $sql = "UPDATE 'job _seeker' SET 'supplier' = {$_POST['supplier']}' ,'content' = '{$_POST['content']}'
    ,'date' = '{$_POST['date']}' WHERE 'post_id' = '{$_POST['post_id']}';";
    if(mysqli_query($db,$sql)){
        echo "新增成功";
    }else{
        echo "新增失敗";
    }
}
?>
<hr>