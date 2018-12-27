<?php 
if($_GET['m'] == "delete"){
    $sql = "DELETE FROM 'job_seeker' WHERE 'post_id' = '{$_GET['id']}';";
    mysqli_query($db,$sql);
}

?>