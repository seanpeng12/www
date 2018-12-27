<?php
// 建立MySQL的資料庫連接 
$conn = mysqli_connect( 
            'localhost',  
            'root',       
            '96748961');  // 預設使用的資料庫名稱 
if(!$conn){
    echo "資料庫連接失敗";
}
mysqli_query($conn, 'SET NAMES utf8;');
mysqli_select_db($conn, 'student');


/* 新增到資料庫   
if(isset($_POST['company'])){        
    $sql = "INSERT INTO student (`company`,`content`,`pddate`)
        VALUES
            ('{$_POST["company"]}','{$_POST["content"]}', '{$_POST["pddate"]}');";

    if(mysqli_query($conn,$sql)){
        echo "新增成功";
    }else{
        echo "新增失敗";
    }
    //$rowinserted = mysqli_affected_rows($conn);
}
*/

//筆數大於0 成功 反之失敗
/*
if($rowinserted > 0 ){
    echo "資料更新成功";
}
*/

?>