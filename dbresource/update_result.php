<?php

try{
    $db = new PDO('mysql:dbhost=localhost;dbname=student;charset=utf8', 'root', '96748961');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}catch(PDOException $e){
    echo $e->getMessage();
}

$res = $db->exec("UPDATE `student` 
SET `company` ='{$_POST["company"]}', `content` = '{$_POST["content"]}', `pddate` = '{$_POST["pddate"]}' 
WHERE `student`.`id` = {$_POST["num"]};");

if($res > 0){
    echo "修改成功";
}else{
    echo "修改不成功,請重試";
}