<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>上傳檔案</title>
</head>
<body>
    <form method="post" action="<?$_SERVER["PHP_SELF"]?>" enctype="multipart/form-data">
        <input type="file" name="uploadfile" accept=".pdf,.doc,.docx">
        <input type="submit" value="確定">
    </form>
</body>

<?php
   echo "檔案類型：", $_FILES["uploadfile"]["type"];
   echo "檔案名稱：", $_FILES["uploadfile"]["name"];
   echo "檔案大小：",($_FILES["uploadfile"]["size"]/1024)," KB <br/>";
   
?>
</html>
