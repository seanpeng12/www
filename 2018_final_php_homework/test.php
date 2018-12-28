<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</head>

<script>
    $(function(){
        $("#send").click(function(){
           $.ajax({
                url: "index.php",
                type: "POST",
                success: function(result,status,xhr){
                    $('#result_hint').modal('toggle');
                    $('#result_here').html(result);
                },
                error: function(xhr,status,error){
                    $('#result_hint').modal('toggle');
                    $('#result_here').html(status);
                },
                data: {
                    "username" : $("#contact_name").val(),
                    "password" : $("#contact_last_name").val(),
                },
                dataType: "text"
            });  
        });
    });
</script>

<body>
<form action="ad/BusinessAction!list.action" method=”post” name="form1" id="form1">
        <input type="radio" name="profile_id" id="teacher" checked required>教師&nbsp
		<input type="radio" name="profile_id" id="student">學生&nbsp
		<input type="radio" name="profile_id" id="admin">管理者&nbsp
        <!--不能post數值(弊端)-->		
		<label for="contact_name">帳號*</label>
		<input type="text" name="contact_name" class="contact_input" required="required">
		
		<label for="contact_last_name">密碼*</label>
		<input type="password" name="contact_last_name" class="contact_input" required="required">

        <input type="button" onclick="manySend('ad/BusinessAction!sendmany.action')"
         class="mulButton" name="Ids" id="allcheck" value="送出">
</form>

<!--下面input框提交的action不同，用onclick跳轉，js方法-->

<script>
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

</script>
</body>
</html>
