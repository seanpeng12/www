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

<?php
    include('inc.php');
?>

<!--此網頁接值  $_SERVER["PHP_SELF"];-->

    <form method="post" action="insert_result.php">
        company：<input name="company" type="text"><br>
        content：<input name="content" type="text"><br>
        pddate：<input name="pddate" type="date" value="<?php echo date('Y-m-d')?>"><br>
        <input name="submit" type="submit" value="新增">
    </form>
 
</body>
</html>