
<!-- 
date_default_timezone_set('Asia/Teipei');
//學校 localhost (root  1~8)
//家 localhost (root  9xxxxx61)
//線上資料庫 db.changken.org (sean  1~8) <已關閉>
$status = false;
$conn = mysqli_connect(
    'localhost',
    'root',
    '9674896'
);
if (!$conn) {
    echo "資料庫連接失敗";
    $status = true;
}
mysqli_query($conn, 'SET NAMES utf8;');
mysqli_select_db($conn, 'sean_web');
 -->

 <?php

date_default_timezone_set('Asia/Teipei');
//學校 localhost (root  1~8)
//家 localhost (root  9xxxxx61)
//線上資料庫 db.changken.org (sean  1~8) <已關閉>
try{
    $status = true;
    $conn = mysqli_connect(
        'localhost',
        'root',
        '96748961'
    );
    if (!$conn) {
        echo '<script type="text/javascript">alert("資料庫連接失敗(Wrong Password)")</script>';
        $status = false;
    }
    mysqli_query($conn, 'SET NAMES utf8;');
    mysqli_select_db($conn, 'sean_web');
}catch(PDOException $e){
    $e->getMessage();
}
?>