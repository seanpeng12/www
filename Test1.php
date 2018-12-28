<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
</head>
<body>
<form name="savefile" method="post" action="">
        檔案名稱: <input type="text" name="filename" value="">.txt<br/>
        <textarea rows="16" cols="100" name="textdata"></textarea><br/>
        <input type="submit" name="submitsave" value="儲存檔案">
</form>
</body>
</html>

<?php
    if (isset($_POST)){
        if ($_POST['submitsave'] == "儲存檔案"  && !empty($_POST['filename'])) {
            if(!file_exists($_POST['filename'] . ".txt")){
                $file = tmpfile();
            }
            $file = fopen($_POST['filename'] . ".txt","a+");
            
            $text = $_POST["textdata"];
            file_put_contents($_POST['filename'] . ".txt", $old . $text);
            fclose($file);
        }

    }
?>

<?php
/*
$arr = file("test.txt");
for($i=0;$i<count($arr);$i++){
    $trans = iconv("BIG-5","UTF-8",$arr[$i]);
    echo $trans,"<br>";
}
echo "=========";
$arr = fopen("test.txt","r");
echo $arr[1];
fwrite($arr,$txt);
fclose($arr);
*/?>

