<?
//$method="de";
$postid=$_GET["postid"];
$link=mysql_connect("localhost","root","badman0602");
mysql_select_db("temp",$link);

//讀取該公告原有資料
$sql="delete from job where postid='$postid'";

if(mysql_query($sql,$link)){
    header('location:index.php?method=message&message=刪除成功');
}
else{
    header('location:index.php?method=message&message=刪除失敗');
}
?>