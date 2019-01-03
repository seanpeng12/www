<!DOCTYPE html>
<html lang="en">

<head>
	<title>帳號驗證</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Sublime project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>
<?php

//session_start();
include("inc.php");

$username = $_POST["account"]; /* 剛剛text 輸入的帳號*/
$password = $_POST["password"]; /* 剛剛text 輸入的密碼*/
//echo $username."<br>";
//echo $passord."<br>";


if ($_POST['profile_id'] == 1) {
    //echo "教師"."<br>";
    $sql = "SELECT * FROM `sean_web`.`teacher` where `account` = '$username';";
} elseif ($_POST['profile_id'] == 2) {
    //echo "學生"."<br>";
    $sql = "SELECT * FROM `sean_web`.`student` where `account` = '$username';";
} elseif ($_POST['profile_id'] == 3) {
    //echo "管理者"."<br>";
    $sql = "SELECT * FROM `sean_web`.`admin` where `account` = '$username';";
}


if (isset($sql)) {
    //學生資料查詢
    if ($result = mysqli_query($conn, $sql)) {
        // 條列獲取

        while ($rows = mysqli_fetch_array($result)) {
            if ($rows[0] == $username && $rows[1] == $password) {
                //將帳號寫入session，方便驗證使用者身份
                $_SESSION['username'] = $id;
                echo '登入成功!';

                switch ($_POST['profile_id']) {
                    case 1:
                        $goto = 'teacher';
                        break;
                    case 2:
                        $goto = 'student';
                        break;
                    case 3:
                        $goto = 'admin';

                }
                echo "<script>location.href='{$goto}.php';</script>";

            } else {
                echo '登入失敗!' . "<br>";
                echo $username . "<br>";
                echo $password . "<br>";
                echo '<meta http-equiv=REFRESH CONTENT=1;url=contact.php>';
            }

        }
    }
}

?>

 <!--
        if ($username == $row[0] &&  == $row[1]) {
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
 -->
    <script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/greensock/TweenMax.min.js"></script>
	<script src="plugins/greensock/TimelineMax.min.js"></script>
	<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="plugins/greensock/animation.gsap.min.js"></script>
	<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="js/custom.js"></script>
 </body>
</html>