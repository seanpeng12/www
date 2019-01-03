<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--jquery library-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>

<body>
<?php
    include("inc.php");
	$sql = 'SELECT student.id FROM sean_web.student where account="root";';
	$schoolID = mysqli_query($conn,$sql);
	$record = mysqli_fetch_row($schoolID);

    echo $record[0];
?>

<form onsubmit="manySend();sendData()" method="post" name="form1" id="form1">
        <input type="radio" name="profile_id" id="teacher" checked required>教師&nbsp
		<input type="radio" name="profile_id" id="student">學生&nbsp
		<input type="radio" name="profile_id" id="admin">管理者&nbsp
        <!--不能post數值(弊端)-->		
		<label for="contact_name">帳號*</label>
		<input type="text" name="contact_name" id="contact_name" class="contact_input" required="required">
		
		<label for="contact_last_name">密碼*</label>
		<input type="password" name="contact_last_name" id="contact_last_name" class="contact_input" required="required">

        <<button type="submit" name="Ids" id="Ids"   value="送出">
        
</form>

<script>
    function sendData(){
        //get the input value
        $someInput = $('#Ids').val();
        $.ajax({
            //the url to send the data to
            url: "admin.php";
            //the data to send to
            data: {
                "username" : $("#contact_name").val(),
                "password" : $("#contact_last_name").val(),
            },
            //type. for eg: GET, POST
            type: "POST",
            //datatype expected to get in reply form server
            dataType: "json",
            //on success
            success: function(result,status,xhr){
                //do something after something is recieved from php
                $('#result_hint').modal('toggle');
                $('#result_here').html(result);
            },
            //on error
            error: function(xhr,status,error){
                //bad request
                $('#result_hint').modal('toggle');
                $('#result_here').html(status);
            }
            dataType: "text"
        });
    }

    //js方法如下


    function manySend(){ 
        if (document.getElementById("teacher").checked) {
            var form = document.form1; 
		    form.action = "teacher.php";//傳想要跳轉的路徑 
            form.submit(); 
	    }
        if (document.getElementById("student").checked) {
            var form = document.form1; 
		    form.action = "student.php";//傳想要跳轉的路徑 
            form.submit(); 
	    }
        if (document.getElementById("admin").checked) {
            var form = document.form1; 
		    form.action = "admin.php";//傳想要跳轉的路徑 
            form.submit(); 

	}   
}



</body>
</html>
/*
		$(function () {
			$("input[name=profile_id]").change(function () {
				switch ($("input[name=profile_id]").val()) {
					case 1:
						$("#loginForm").attr('action', 'teacher.php');
						alert(1);
						break;
					case 2:
						$("#loginForm").attr('action', 'student.php');
						alert(2);
						break;
					case 3:
						$("#loginForm").attr('action', 'admin.php');
						alert(3);
				}
			});
		});
		*/