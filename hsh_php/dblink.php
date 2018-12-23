<?
$method=$_POST["method"];
$postid=$_POST["postid"];
$company=$_POST["company"];
$content=$_POST["content"];
$pdate=$_POST["pdate"];

$link=mysql_connect("localhost","root","badman0602");
mysql_select_db("temp",$link);

if($method=="insert"){
    $sql="INSERT INTO `job` (`postid`, `company`, `content`, `pdate`) VALUES ($postid, '$company', '$content', '$pdate')";
    echo $sql;
    if(mysql_query($sql,$link)){
        header('location:index.php?method=message&message=新增成功');
        
    }  
}
else{
        $sql=
            "UPDATE `job` SET `company` ='$company',`content` = '$content',`pdate` = '$pdate' WHERE `job`.`postid` = $postid";
            
        echo $sql;
        if(mysql_query($sql,$link)){
            header('location:index.php?method=message&message=修改成功');
        }
    }

?>
