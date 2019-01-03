
<!-- JSP跳轉(無post數值(需添加))
						<script>

							function output($website) {
								if (document.getElementById("teacher").checked) {
									$website = "teacher.php";
									document.getElementById('contact_form').action ='teacher.php';
								}

								if (document.getElementById("student").checked) {
									$website = "student.php";
									document.getElementById('contact_form').action ='student.php';
								}
								if (document.getElementById("admin").checked) {
									$website = "admin.php";
									document.getElementById('contact_form').action ='admin.php';
								}
							}
							
						}
						 
				</script>
				
				-->
				<!---->
				<?php
				/*
                include("inc.php");

                $username = $_POST["account"];  剛剛text 輸入的帳號
                $password = $_POST["password"];  剛剛text 輸入的密碼
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
                        $rows = mysqli_fetch_array($result, MYSQLI_BOTH);
                            
                        if ($username == $row[6] && $password == $row[7]) {
                            //echo "<script> swal('登入成功', '在這裡輸入訊息文字！', 'success');</script> ";
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
                        }
                        //echo("sql學生名字=".$student_row[1])."<br>";
                            //echo("sql學生帳號=".$student_row[6])."<br>";
                            //echo("sql學生密碼=".$student_row[7])."<br>";
                    }
                }
                
                
                if (isset($sql1)) {
                    //老師資料查詢
                    if ($result=mysqli_query($conn, $sql1)) {
                        // 一条条获取
                        while ($teacher_row=mysqli_fetch_row($result)) {
                            //echo("sql老師名字=".$teacher_row[1])."<br>";
                            //echo("sql老師帳號=".$teacher_row[5])."<br>";
                            //echo("sql老師密碼=".$teacher_row[6])."<br>";
                        }
                    }
                }

                if (isset($sql2)) {
                    //管理者資料查詢
                    if ($result=mysqli_query($conn, $sql2)) {
                        // 一条条获取
                        while ($admin_row=mysqli_fetch_row($result)) {
                            //echo("sql管理名字=".$admin_row[1])."<br>";
                            //echo("sql管理帳號=".$admin_row[4])."<br>";
                            //echo("sql管理密碼=".$admin_row[5])."<br>";
                        }
                    }
                }
                */