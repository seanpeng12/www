<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="http://www.pureexample.com/js/lib/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="http://www.pureexample.com/js/flot/jquery.flot.min.js"></script>
    <title>圖表</title>
</head>
<script type="text/javascript">

     var data = [
     [1, <?echo $_POST['month_A'][0]?>], 
     [2, <?echo $_POST['month_A'][1]?>], 
     [3, <?echo $_POST['month_A'][2]?>], 
     [4, <?echo $_POST['month_A'][3]?>], 
     [5, <?echo $_POST['month_A'][4]?>], 
     [6, <?echo $_POST['month_A'][5]?>], 
     [7, <?echo $_POST['month_A'][6]?>], 
     [8, <?echo $_POST['month_A'][7]?>],
     [9, <?echo $_POST['month_A'][8]?>], 
     [10, <?echo $_POST['month_A'][9]?>], 
     [11, <?echo $_POST['month_A'][10]?>], 
     [12, <?echo $_POST['month_A'][11]?>]];
     var data2 = [
     [1, <?echo $_POST['month_B'][0]?>], 
     [2, <?echo $_POST['month_B'][1]?>], 
     [3, <?echo $_POST['month_B'][2]?>], 
     [4, <?echo $_POST['month_B'][3]?>], 
     [5, <?echo $_POST['month_B'][4]?>], 
     [6, <?echo $_POST['month_B'][5]?>], 
     [7, <?echo $_POST['month_B'][6]?>], 
     [8, <?echo $_POST['month_B'][7]?>],
     [9, <?echo $_POST['month_B'][8]?>], 
     [10, <?echo $_POST['month_B'][9]?>], 
     [11, <?echo $_POST['month_B'][10]?>], 
     [12, <?echo $_POST['month_B'][11]?>]];
     var data3 = [
     [1, <?echo $_POST['month_C'][0]?>], 
     [2, <?echo $_POST['month_C'][1]?>], 
     [3, <?echo $_POST['month_C'][2]?>], 
     [4, <?echo $_POST['month_C'][3]?>], 
     [5, <?echo $_POST['month_C'][4]?>], 
     [6, <?echo $_POST['month_C'][5]?>], 
     [7, <?echo $_POST['month_C'][6]?>], 
     [8, <?echo $_POST['month_C'][7]?>],
     [9, <?echo $_POST['month_C'][8]?>], 
     [10, <?echo $_POST['month_C'][9]?>], 
     [11, <?echo $_POST['month_C'][10]?>], 
     [12, <?echo $_POST['month_C'][11]?>]];

     var dataset = [{label:"績優股",data: data},{label: "高風險股",data: data2},{label: "潛力股",data: data3}];
 
        var options = {
            series: {
                lines: { show: true },
                points: {
                    radius: 4,
                    show: true
                }
            }
        };
 
        $(document).ready(function () {
            $.plot($("#flotid"), dataset, options);
        });
</script>


<style type="text/css">
        #flotid {width:50%;height:300px;}        
 </style>
<body>

    <div id="flotid"></div>
</body>

</html>