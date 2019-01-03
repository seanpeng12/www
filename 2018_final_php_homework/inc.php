<?php
date_default_timezone_set('Asia/Teipei');

$conn = mysqli_connect(
    'localhost',
    'root',
    '96748961'
);
if (!$conn) {
    echo "資料庫連接失敗";
}
mysqli_query($conn, 'SET NAMES utf8;');
mysqli_select_db($conn, 'sean_web');
?>