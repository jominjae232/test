<?php
include("../dbc.php");

$mb_nick = trim($_POST['reg_mb_nick']);

$sql = "SELECT mb_nick FROM member_table WHERE mb_nick = '{$mb_nick}'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);
if ($row['mb_nick']) {
    echo $reg_data = 'Y'. '/' .$row['mb_nick'];    
} else {
    echo $reg_data = 'N'. '/' .$mb_nick;    
}