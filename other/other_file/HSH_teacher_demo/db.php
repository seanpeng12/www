<?php 

$db = mysqli_connect('localhost','root','96748961');

if(!$db){
    echo "無法連接伺服器!";
}
mysqli_set_charset($db,"utf8");
mysqli_select_db($db, 'job_seeker');

?>