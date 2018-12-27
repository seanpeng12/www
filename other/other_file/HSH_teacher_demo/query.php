<form action="index.php?m=query" method="post">
    <input type="text" name="searchtext" value="<?php echo(isset($_POST['searchtext'])) ? $_POST['searchtext'] : "";?>" placeholder="公告編號或求才廠商">
    <button type="submit">查詢</button>
</form>
<table border="1" width="50%">
    <tr>
        <th>公告編號</th>
        <th>求才廠商</th>
        <th>求才內容</th>
        <th>求才日期</th>
        <th>動作</th>
    </tr>
    <?php

    if(isset($_POST['searchtext'])){
        $sql= "SELECT * FROM 'job_seeker' WHERE 'post_id' LIKE '%{$_POST['searchtext']}%' or 'supplier' LIKE '%{$_POST['searchtext']}%';" ;
    }else{
        $sql= "SELECT * FROM 'job_seeker'" ;
    }
    $result = mysqli_query($db,$sql);
    while($row = mysqli_query($result)){
    ?>

    <tr>
        <td><?=$row[0];?></td>
        <td><?=$row[1];?></td>
        <td><?=$row[2];?></td>
        <td><?=$row[3];?></td>
        <td><a href="index.php?m=update&id=<?=$row[0]?>">[修改]</a>&nbsp;
            <a href="index.php?m=delete&id=<?=$row[0]?>">[刪除]</a>
        </td>
    </tr>

    <?php }?>
</table>