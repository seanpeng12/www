<?php
$dbhost = 'db.changken.org';
$dbuser = 'sean';
$dbpasswd = '12345678';
$dbname = 'changken_web';
$charset ='utf8';
$dsn = "mysql:host=".$dbhost.";dbname=".$dbname.";charset=".$charset;
try{
    $db = new PDO($dsn,$dbuser,$dbpasswd);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}catch(PDOException $e){
    echo "CONNECTION FAILED!：".$e->getMessage();
}
 
$res = $db->exec("INSERT INTO `student` (`id`, `name`, `email`, `phone`, `departmentGrade`, `project_id`)
VALUES
    ('{$_POST["id"]}','{$_POST["name"]}', '{$_POST["email"]}','{$_POST["phone"]}','{$_POST["departmentGrade"]}',{$_POST["project_id"]});");
if($res > 0){
    echo "新增成功";
}else{
    echo "新增不成功";
}