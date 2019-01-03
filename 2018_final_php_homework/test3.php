<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>登入</title>

</head>
<body>
<form action="<?$_SERVER["PHP_SELF"];?>" name="form1" method="post">
  <p>請選擇登入身分<br></p>
	<input type="radio" name="profile_id"  value="1" required>教師&nbsp
	<input type="radio" name="profile_id"  value="2">學生&nbsp
	<input type="radio" name="profile_id"  value="3"  checked>管理者&nbsp
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
   
    
    if ($_POST['profile_id']==1) {
        echo "教師";
    } elseif ($_POST['profile_id']==2) {
        echo "學生";
    } elseif ($_POST['profile_id']==3) {
        echo "管理者";
    }
    //學生資料查詢
    
    $sql = "SELECT * FROM `sean_web`.`student` where `account` = '$username';";
    if ($result=mysqli_query($conn, $sql)) {
        // 一条条获取
        while ($student_row=mysqli_fetch_row($result)) {
            echo("學生=".$student_row[1]);
            echo "<br>";
        }
    }
    //老師資料查詢
    $sql1 = "SELECT * FROM sean_web.teacher where account = '$username';";
    if ($result=mysqli_query($conn, $sql1)) {
        // 一条条获取
        while ($teacher_row=mysqli_fetch_row($result)) {
            echo("老師=".$teacher_row[1]);
            echo "<br>";
        }
    }
    //管理者資料查詢
    $sql2 = "SELECT * FROM sean_web.admin where account = '$username';";
    if ($result=mysqli_query($conn, $sql2)) {
        // 一条条获取
        while ($admin_row=mysqli_fetch_row($result)) {
            echo("管理者=".$admin_row[1]);
            echo "<br>";
        }
    } else {
        echo "抓不到資料";
    }
?>




<script>
    var $account = "<?php echo $username ?>";
    var $password = "<?php $password ?>";
    var $ttt = "<?php echo $admin_row[1] ?>";

    function check() {
        if (document.getElementById("admin_radio").checked) {
            window.alert($account);
            
        }
								
    }      
</script>

</body>
<html>