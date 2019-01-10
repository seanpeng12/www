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


<?php
$successed = '';
$failed = '';
$act = '';

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

?>


<body>

	<div style="background_color" class="super_container">

		<!-- Header -->

		<header class="header">
			<div class="header_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header_content d-flex flex-row align-items-center justify-content-start">
								<div class="logo"><a href="#">Fu Jen University.</a></div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</header>


		<!-- Home -->

		<!-- Ad -->

		<div class="avds_xl">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="avds_xl_container clearfix">
							<div class="avds_xl_background" style="background-image:url(images/avds_xl.jpg)"></div>

						</div>
					</div>
				</div>
			</div>
		</div>



		<!-- Products -->

		<div class="container">
			<div class="row">
				<div class="col-sm product_title">
					<?
				if (isset($sql)) {
    
				if ($result = mysqli_query($conn, $sql)) {
   

					while ($rows = mysqli_fetch_array($result)) {
						if ($rows[0] == $username && $rows[1] == $password) {
							$_SESSION['username'] = $id;
                			echo '登入成功!';
                			echo '<h1><center>登入成功!</center></h1>';

							switch ($_POST['profile_id']) {
								case 1:
									$goto = 'teacher.php?A='.$rows[0].'';
									break;
								case 2:
									$goto = 'student.php?A='.$rows[0].'';
									break;
								case 3:
									$goto = 'admin.php?A='.$rows[0].'';

							}
							echo "<script>location.href='{$goto}';</script>";

						} else {
							echo '<h1><center>登入失敗，請確認帳號密碼</center></h1>';
							echo '<meta http-equiv=REFRESH CONTENT=1;url=contact.php>';
                	//echo $username . "<br>";
                	//echo $password . "<br>";
                	//echo '<meta http-equiv=REFRESH CONTENT=1;url=contact.php>';
						}


					}
				}
			}
			?>

					
				</div>

			</div>
		</div>

	</div>

	<!-- Footer -->

	<div class="footer_overlay"></div>
	<footer class="footer">
		<div class="footer_background" style="background-image:url(images/footer.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="footer_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
						<div class="footer_logo"><a href="#">Sublime.</a></div>
						<div class="copyright ml-auto mr-auto">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script> All rights reserved </a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</div>
						<div class="footer_social ml-lg-auto">
							<ul>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

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