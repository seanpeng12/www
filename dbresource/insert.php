<?php
date_default_timezone_set('Asia/Taipei');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>學生-新增資料</title>
</head>
<body>

<!--此網頁接值  $_SERVER["PHP_SELF"];-->

    <form method="post" action="insert_result.php">
        company：<input name="company" type="text"><br>
        content：<input name="content" type="text"><br>
        pddate：<input name="pddate" type="date" value="<?php echo date('Y-m-d')?>"><br>
        <input name="submit" type="submit" value="新增">
    </form>
 
<?php
// 建立MySQL的資料庫連接 
$conn = mysqli_connect( 
            'localhost',  
            'root',       
            '96748961');  // 預設使用的資料庫名稱 
if(!$conn){
    echo "資料庫連接失敗";
}
mysqli_query($conn, 'SET NAMES utf8;');
mysqli_select_db($conn, 'student');


/* 新增到資料庫   
if(isset($_POST['company'])){        
    $sql = "INSERT INTO student (`company`,`content`,`pddate`)
        VALUES
            ('{$_POST["company"]}','{$_POST["content"]}', '{$_POST["pddate"]}');";

    if(mysqli_query($conn,$sql)){
        echo "新增成功";
    }else{
        echo "新增失敗";
    }
    //$rowinserted = mysqli_affected_rows($conn);
}
*/

//筆數大於0 成功 反之失敗
/*
if($rowinserted > 0 ){
    echo "資料更新成功";
}
*/

?>



</body>
</html>