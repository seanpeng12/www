<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    //obdc連接資料庫
    $link = odbc_connect('ODBClink',"root","1234");

        //obdc新增
        if(isset($_POST['id'])){
            $sql = "INSERT INTO `student` (`id`, `student_Name`, `student_debt`)
            VALUES 
                '{$_POST['id']}',
                '{$_POST['student_Name']}',
                '{$_POST['student_debt']}';";

            odbc_exec($link,$sql);
            if(odbc_exec($link,$sql)){
                echo "成功！";
            }else{
                echo "failed!";
            }
        }
        //odbc印出
        $access = "SELECT * FROM student";
        $result = odbc_exec($link,$access);
        
        echo "<table border=1><tr><th>id</th><th>student_Name</th><th>student_debt</th></tr>\n";
	    $num_row=0;
        while( odbc_fetch_row($result)){
            $id= odbc_result( $result, 1 );
			// 抓取 "id" 欄位的資料
		    $student_Name= odbc_result( $result, 2 );
			// 抓取 "name"欄位的資料
            $student_debt= odbc_result( $result, 3 );
            // 抓取 "debt"欄位的資料
            echo "<tr><td>$id</td><td>$student_Name</td><td>$student_debt</td></tr>\n";
	    }
    ?>

    

    <form method="post" action="<?= $_SERVER["PHP_SELF"] ?>">
        <p>新增資料到student資料表</p><br>
        id：<input name="id">
        student_name：<input name="student_Name">
        student_debt：<input name="student_debt">
        <input name="submit" type="submit" value="新增">
    </form>

</body>
</html>