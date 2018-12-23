
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>學生-修改資料</title>
</head>
<body>
    <form method="post" action="update_result.php">
        欲修改的序號：<input name="num" type="text"><br>
        company：<input name="company" true="text"><br>
        content：<input name="content" type="text"><br>
        pddate：<input name="pddate" type="date" value="<?php echo date('Y-m-d')?>"><br>
        <input name="submit" type="submit" value="修改"><br>
    </form>
<?php


$conn = mysqli_connect( 
            'localhost',  
            'root',       
            '96748961');
if(!$conn){
    echo "資料庫連線失敗";
} 
mysqli_query($conn,'SET NAMES utf8');
mysqli_select_db($conn,"student");
 /*        
if(!empty($_POST['name']) && !empty($_POST["department"]) && !empty($_POST["num"])){
    $sql = "UPDATE student
        SET company ='{$_POST["company"]}'
            content ='{$_POST["content"]}'
            pddate ='{$_POST["pddate"]}'
    WHERE id = '{$_POST["num"]}'";

    mysqli_query($conn,$sql);

//取得更新筆數
$rowUpdated=mysqli_affected_rows($conn);
}
//筆數大於0 成功 反之失敗
if($rowUpdated > 0 ){
    echo "資料更新成功";
}
*/
?>
    



</body>
</html>