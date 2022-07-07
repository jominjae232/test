<?php
include("../dbc.php");

$mb_id = trim($_POST['reg_mb_id']);

$sql = "SELECT mb_id FROM member_table WHERE mb_id = '{$mb_id}'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);
if ($row['mb_id']) {
    echo $reg_data = 'Y'. '/' .$row['mb_id'];    
} else {
    echo $reg_data = 'N'. '/' .$mb_id;    
}

mysqli_close($db);