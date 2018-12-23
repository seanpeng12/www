<?php
date_default_timezone_set('Asia/Teipei');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>學生-刪除資料</title>
</head>
<body>
    <form method="post" action="delete_result.php">
        請輸入愈刪除序號：
        <input name="id" type="text"><br>
        <input type="submit" type="submit" value="刪除">
        <input type="reset" value="清除">
    </form>
<?php
$conn = mysqli_connect(
            'localhost',
            'root',
            '96748961');
if(!$conn){
    echo "資料庫連接失敗";
}
mysqli_query($conn,'SET NAMEs utf8;');
mysqli_select_db($conn,'student');
?>
</body>
</html>
