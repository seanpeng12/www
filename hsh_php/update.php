<?
//$method="update";

$postid=$_GET["postid"];
$link=mysql_connect("localhost","root","badman0602");
mysql_select_db("temp",$link);

//讀取該公告原有的資料
$sql="select * from job where postid='$postid'";
$rs=mysql_query($sql,$link);
if($record=mysql_fetch_row($rs)){
    $company=$record[1];
    $content=$record[2];
    $pdate=$record[3];
}
?>
<center>
    <form method="post" action="dblink.php">
        <input type="hidden" name="method" value="<?echo $method?>">
        <table class="RedListCap" align=center width="40%"></table>
        <caption class="RedListCap">修改 求才公告</caption>
                <table class="RedList" align=center width="40%">
            <caption class="RedListCap">新增 求才公告</caption>
            <tr>
                <td>公告代碼</td>
                <td><input type=text name="postid" value="<?echo $postid?>"  readonly="readonly"></td>
            </tr>
            <tr>
                <td>求才廠商</td>
                <td><input type=text name="company" value="<?echo $company?>"></td>
            </tr>
            <tr>
                <td>求才內容</td>
                <td><textarea name="content" cols=40 row=10 ><?echo $content?></textarea></td>
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