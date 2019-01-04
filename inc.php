<?php
date_default_timezone_set('Asia/Teipei');
//學校 localhost (root  12345678)
//家 localhost (root  9xxxxx61)
//線上資料庫 db.changken.org (sean  12345678)

$conn = mysqli_connect(
    'db.changken.org',
    'sean',
    '12345678'
);
if (!$conn) {
    echo "資料庫連接失敗";
}
mysqli_query($conn, 'SET NAMES utf8;');
mysqli_select_db($conn, 'sean_web');
?>