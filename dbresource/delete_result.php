<?php

try{
    $db = new PDO('mysql:dbhost=localhost;dbname=student;charset=utf8','root','96748961');
}catch(PDOException $e){
    echo $e->getmessage();
}

$res = $db->exec(
    "DELETE FROM `student` WHERE `student`.`id` = {$_POST["id"]}");

if($res >0){
    echo "刪除成功";
}else{
    echo "刪除不成功,請重試";
}
?>