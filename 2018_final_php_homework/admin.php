<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理者</title>
</head>
<body
>
<?php
    $account= $_POST['contact_name'];
    echo $account;

    if (empty($_POST['contact_name'])){
        echo "account無數值";
    }
    echo $_POST['contact_last_name'];
?>
    
</body>
</html>