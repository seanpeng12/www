<?php
$sql = "SELECT * FROM `sean_web`.`teacher` where `account` = 'root1';";

if (isset($sql)) {
    //學生資料查詢
    $result = mysqli_query($conn, $sql);
        // 條列獲取

    while ($rows = mysqli_fetch_array($result)) {
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 5; $j++) {
                echo $rows[i][j] + "</br>";
            }
            echo "</br>";
        }
    }
}


?>