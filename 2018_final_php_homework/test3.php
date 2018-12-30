<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>登入</title>

</head>
<body>

<form action="<?$_SERVER["PHP_SELF"];?>" name="form1" method="post">
  <p>請選擇登入身分<br></p>
	<input type="radio" name="profile_id" id="teacher_radio" checked required>教師&nbsp
	<input type="radio" name="profile_id" id="student_radio">學生&nbsp
	<input type="radio" name="profile_id" id="admin_radio">管理者&nbsp
  <p>輸入會員帳號：
    <input type="text" name="account" id="account">
  </p>
  <p>輸入會員密碼： 
    <input type="text" name="password" id="password">
  </p>
  <p>
    <input type="submit" name="Submit" value="查詢" onclick=check()>
    <input type="reset" name="Submit2" value="取消" >
  </p>
</form>
<?php
    include("inc.php");
    
	$username = $_POST["account"]; /* 剛剛text 輸入的帳號*/	
	$passord = $_POST["password"]; /* 剛剛text 輸入的密碼*/
	echo $username."<br>"; 
    echo $passord."<br>";
    
    //學生資料查詢
    $sql = 'SELECT * FROM sean_web.student where account=$username;';
    $temp = mysqli_query($conn,$sql);
    $student_inf = mysqli_fetch_row($temp);
    //老師資料查詢
    $sql1 = 'SELECT * FROM sean_web.teacher where account=$username;';
    $temp1 = mysqli_query($conn,$sql1);
    $teacher_inf = mysqli_fetch_row($temp1);
    
    //管理者資料查詢
    $sql2 = 'SELECT * FROM sean_web.admin where account=$username;';
    $temp2 = mysqli_query($conn,$sql2);
    $admin_inf = mysqli_fetch_row($temp2);
    echo "名字為：".$admin_inf[1]."<br>";
?>

<script>
    var $account = "<?php echo $username ?>";
    var $password = "<?php echo $password ?>";
    var $ttt = "<?php echo $admin_inf ?>";

    function check() {
        if (document.getElementById("admin_radio").checked) {
            if($ttt = $account){
                window.alert("帳號正確!");
            }
        }
								
    }      
</script>

</body>
<html>