<!DOCTYPE html>
<html lang="en">

<?
    include("inc_new.php");
    //讀取線上資料庫
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>jquery</title>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js">
    </script>
    <!--加入排序功能-->
    <script type="text/javascript" class="init">
        $(document).ready(function () {
            $('#example').DataTable({
                order: [
                    [3, 'desc'],
                    [0, 'asc']
                ]
            });
        });
    </script>


</head>

<?
		$sql[0] = "SELECT * FROM `web_temp` WHERE `id` = 1;";
        $sql[1] = "SELECT * FROM `web_temp` WHERE `id` = 2;";
        $sql[2] = "SELECT * FROM `web_temp` WHERE `id` = 3;";
        $sql[3] = "SELECT * FROM `web_temp` WHERE `id` = 4;";
        $sql[4] = "SELECT * FROM `web_temp` WHERE `id` = 5;";
        

        
        
            
?>

<body>
    <table id="example" class="table table-hover display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>年度</th>
                <th>職業別</th>
                <th>行業別</th>
                <th>總薪資</th>
                <th>經常性薪資</th>
                <th>非經常性薪資</th>

            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>年度</th>
                <th>職業別</th>
                <th>行業別</th>
                <th>總薪資</th>
                <th>經常性薪資</th>
                <th>非經常性薪資</th>

            </tr>
        </tfoot>
        <tbody>
            <?   
        if (isset($sql)) {
            for($i = 0;$i<5 ;$i++){
                echo "<tr>";
                $result = mysqli_query($conn, $sql[$i]);
                $rows = mysqli_fetch_array($result);
                for($j = 0;$j<6 ;$j++){
                     echo "<th>$rows[$j]</th>";
                }
                echo "</tr>";
            }
        };
        ?>
        </tbody>
    </table>

</body>

</html>