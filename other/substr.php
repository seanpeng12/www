<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?$_SERVER["PHP_SELF"]?>">
        請輸入字串：<input type="text" name="str">
        <input type="submit">
    </form>
<?php
    $temp = $_POST["str"];

    echo $result;
    for ( $i=0 ; $i<= strlen($temp); $i++){
        for ($k=0 ; $k<= strlen($temp)-$i ;$k++){
            echo substr($temp,$i,$k);
            echo '<br>';
        }
        
    }

    


?> 
</body>
</html>
