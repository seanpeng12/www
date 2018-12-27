<!doctype html>
<html lang="zh-tW">
 <head>
  <meta charset="UTF-8">
  <title>求才公告系統</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
 <?php
 date_default_timezone_set("Asia/Taipei");
    include_once "nav.php";
    include_once "db.php";
    switch ($_GET['m']) {
      case 'insert' :
        include_once "insert.php";
        break;
      case 'update' :
        include_once "update.php";
        break;
      case 'delete' :
        include_once "delete.php";
        break;
    }
    include_once "query.php";
      mysqli_close($db);
 ?>
 </body>
</html>
