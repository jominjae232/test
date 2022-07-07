<?php
include("./dbc.php");

if(isset($_POST['login_mb_pass'])) {
	$pass = $_POST['login_mb_pass'];
	
}
$password = md5($pass);

if(isset($_POST['login_mb_id'])) {
	$mb_id = $_POST['login_mb_id'];
}


$common = "SELECT COUNT(*) AS cnt FROM `member_table`";
$where = "WHERE mb_password='".$password."' and mb_id = '".$mb_id."'";

$sql = $common." ".$where.";";

$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);

if($row['cnt'] == '1') {

	$sql_common = "SELECT * FROM `member_table`";
	$sql_where = "WHERE mb_password='".$password."' and mb_id = '".$mb_id."'";
	$sqls = $sql_common.' '.$sql_where.';';

	$res = mysqli_query($db,$sqls);
	$rows = mysqli_fetch_array($res);

	session_start();
	$mb_id = $rows['mb_id'];
	$mb_name = $rows['mb_name'];
	
	$_SESSION['mb_id'] = $mb_id;
	$_SESSION['mb_name'] = $mb_name;

	echo "
	<script class='text/javascript'>
		alert('로그인 성공!');
		location.href='./index.php';
	</script>
	";

}

else if($row['cnt'] == '0') {

	echo "
	<script class='text/javascript'>
	alert('로그인 가능한 계정을 발견하지 못하였습니다.');
	location.href='./index.php';		
	</script>
	";

}

else {

	echo "
	<script class='text/javascript'>
	alert('로그인 중 에러 발생!');
	location.href='./index.php';
	</script>
	";

}




mysqli_close($db);