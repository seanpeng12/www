<!DOCTYPE html>
<html lang="en">
<?php
session_start();

if(isset($_POST['id'])){
    $_SESSION['id']=$_POST['id']; 
}elseif (isset($_POST['logout'])){
    unset($_SESSION['id']);
};

if(isset($_SESSION['id'])){
    echo "HELLO" + $_SESSION['id'];
    echo '<form action='.$_SERVER["PHP_SELF"].' method="post">
    <input type="submit" name="logout" value="登出"></form>';
}else{
    echo '<form action='.$_SERVER["PHP_SELF"].' method="post">
    帳號：<input type="text" name="id">
    密碼：<input type="password" name="code">
    <input type="submit" value="登入"></form>';
}



?>
