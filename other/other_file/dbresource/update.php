
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>學生-修改資料</title>
</head>

<?php
    include('inc.php');
?>

<body>
    <form method="post" action="update_result.php">
        欲修改的序號：<input name="num" type="text"><br>
        company：<input name="company" true="text"><br>
        content：<input name="content" type="text"><br>
        pddate：<input name="pddate" type="date" value="<?php echo date('Y-m-d')?>"><br>
        <input name="submit" type="submit" value="修改"><br>
    </form>
    



</body>
</html>