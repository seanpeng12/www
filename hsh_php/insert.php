<?
//$method="insert";
$postid="";
$company="";
$content="";
$pdate="";
?>
<center>
    <form  action="dblink.php" method="post">
        <input type=hidden name="method" value="<? echo $method?>">
        <table class="RedList" align=center width="40%">
            <caption class="RedListCap">新增 求才公告</caption>
            <tr>
                <td>公告代碼</td>
                <td><input type=text name="postid" value="<?echo $postid?>"></td>
            </tr>
            <tr>
                <td>求才廠商</td>
                <td><input type=text name="company" value="<?echo $company?>"></td>
            </tr>
            <tr>
                <td>求才內容</td>
                <td><textarea name="content" cols=40 rows=10 ><?echo $content?></textarea></td>
            </tr>
            <tr>
                <td>求才日期</td>
                <td><input type=date name="pdate" value="<?echo $pdate?>"></td>
            </tr>
            <tr align=center> 
                <td colspan="2"><input type="submit"></td>
            </tr>
            
        </table>
    </form>
          
    
</center>