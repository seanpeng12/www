<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<form method='post' action='' name="frm">
        <input type="radio" name="profile_id" id="teacher" checked required>教師&nbsp
		<input type="radio" name="profile_id" id="student">學生&nbsp
		<input type="radio" name="profile_id" id="admin">管理者&nbsp
        	
		<label for="contact_name">帳號</label>
		<input type="text" id="contact_name" class="contact_input" required="required">
		
		<label for="contact_last_name">密碼</label>
		<input type="password" id="contact_last_name" class="contact_input" required="required">

        <input type="button" onclick="decision();"
         class="mulButton" name="Ids" id="allcheck" value="送出">
</form>

</body>
</html>

<script>

function ToSubmit(){
frm.action = "admin.php";

}

<script>

<form method='post' action='' name="frm"  >

   <input name="button" type="submit"
    class="bg03" id="button" onclick="ToSubmit();" value="確認">

</form>