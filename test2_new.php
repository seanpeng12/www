<?php
$txt = $_POST["txt"];
$arr = array();
for($i=0;$i<strlen($txt);$i++){
    for($j=2;$j<strlen($txt)-$i+1;$j++){
        if(substr_count($txt, substr($txt,$i,$j)) >= 2){
            $arr[] = substr($txt,$i,$j);

        }
        
    }
    
}

    $res = array_unique($arr);
    for($k=0;$k<count($res);$k++){
        echo $res[$k],"<br>";
    }
?>