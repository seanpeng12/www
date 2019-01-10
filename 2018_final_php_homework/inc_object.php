<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpasswd = '96748961';
$dbname = 'sean_web';
$charset ='utf8';
$dsn = "mysql:host=".$dbhost.";dbname=".$dbname.";charset=".$charset;
try{
    $db = new PDO($dsn,$dbuser,$dbpasswd);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}catch(PDOException $e){
    echo "CONNECTION FAILED!?".$e->getMessage();
}
?>