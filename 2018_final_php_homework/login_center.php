<?php
include("inc.php");

$username = $_POST["account"]; /* 剛剛text 輸入的帳號*/
$password = $_POST["password"]; /* 剛剛text 輸入的密碼*/
//echo $username."<br>";
//echo $passord."<br>";
   
    
if ($_POST['profile_id']==1) {
    echo "教師"."<br>";
    $sql = "SELECT * FROM `sean_web`.`teacher` where `account` = '$username';";
} elseif ($_POST['profile_id']==2) {
    echo "學生"."<br>";
    $sql = "SELECT * FROM `sean_web`.`student` where `account` = '$username';";
} elseif ($_POST['profile_id']==3) {
    echo "管理者"."<br>";
    $sql = "SELECT * FROM `sean_web`.`admin` where `account` = '$username';";
}
                
if (isset($sql)) {
    //學生資料查詢
    if ($result = mysqli_query($conn, $sql)) {
        // 一条条获取(殘體中文)
        $rows = mysqli_fetch_all($result, $conn);
                            
        if ($username == $row[0] && $password == $row[1]) {
        //echo "<script> swal('登入成功', '在這裡輸入訊息文字！', 'success');</script> ";
            switch ($_POST['profile_id']) {
                case 1:
                header('location:teacher.php');
                //$goto = 'teacher';
                break;
                case 2:
                header('location:student.php');
                //$goto = 'student';
                break;
                case 3:
                header('location:admin.php');
                //$goto = 'admin';
                default:
                header('location:contact.php');

            }
            //echo "<script>location.href='{$goto}.php';</script>";
        }
            //echo("sql學生名字=".$student_row[1])."<br>";
            //echo("sql學生帳號=".$student_row[6])."<br>";
            //echo("sql學生密碼=".$student_row[7])."<br>";
    }
}

?>