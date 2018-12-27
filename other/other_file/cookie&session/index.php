<!DOCTYPE html>
<html lang="en">

<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <title>首頁</title>
</head>
<body>


<?php
    $ini_id = 'root';
    $ini_pass = '12345';  

    if(isset($_POST['id'])){
      if($_POST['id'] == $ini_id && $_POST['pass'] == $ini_pass){
        $_SESSION['id']=$_POST['id']; 
        $_SESSION['pass']=$_POST['pass']; 
        echo "成功";
      }

      $_SESSION['pass']=$_POST['pass']; 
    }elseif (isset($_POST['logout'])){
      unset($_SESSION['id']);
      unset($_SESSION['pass']);
    };

    if(empty($_SESSION["id"])){
      echo '
      
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <a class="navbar-brand" href="#">登入</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                 <a class="nav-item nav-link" href="#">聯絡我們</a>
            </div>
         </div>
    </nav>
    
    <form action='.$_SERVER["PHP_SELF"].'  method="post">
    帳號：<input type="text" name="id">
    密碼：<input type="password" name="pass">
    <input type="submit" value="登入">
    </form>';
    }else{
      echo '
      
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
           </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                   <a class="nav-item nav-link" href="#">聯絡我們</a>
                   <a class="nav-item nav-link" href="#">帳號管理</a>
                   <a class="nav-item nav-link" href="#">公告管理</a>
            </div>
        </div>
      </nav>
      <form action='.$_SERVER["PHP_SELF"].'  method="post">
      <input type="submit" name="logout" value="登出">
      </form>'
      ;
    }
?>


    
</body>
</html>