<?php

try{
    $db = new PDO('mysql:dbhost=localhost;dbname=student;charset=utf8', 'root', '96748961');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}catch(PDOException $e){
    echo $e->getMessage();
}

$res = $db->exec("INSERT INTO student (`company`,`content`,`pddate`)
VALUES
    ('{$_POST["company"]}','{$_POST["content"]}', '{$_POST["pddate"]}');");
if($res > 0){
    echo "新增成功";
}else{
    echo "新增不成功";
}