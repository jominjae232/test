<?php
include("../dbc.php");

$mb_name = $_POST['mb_name'];
$mb_gender = $_POST['mb_gender'];
$mb_nick = $_POST['mb_nick'];
$birth_day = $_POST['y_birth'].".".$_POST['m_birth'].".".$_POST['d_birth'];
$mb_id = $_POST['mb_id'];
$mail = $_POST['f_mail']."@".$_POST['t_mail'];
$tell = $_POST['f_tell']."-".$_POST['t_tell']."-".$_POST['tt_tell'];
$type = $_POST['type'];
$pass = md5($_POST['pass']);


$serch_sql = "SELECT count(*) as cnt FROM `member_table` where mb_nick = '".$mb_nick."' OR mb_id = '".$mb_id."'";
$result = mysqli_query($db, $serch_sql);
$row = mysqli_fetch_array($result);

if($row['cnt'] == 0) {

	if($type == 2 && isset($_POST['f_t_tell'])) {
		$p_tell = $_POST['f_f_tell']."-".$_POST['f_t_tell']."-".$_POST['f_tt_tell'];
	}

	if(isset($_POST['sms_ok'])) {
		$sms_ok = $_POST['sms_ok'];
	}

	$jobs = $_POST['jobs'];

	$sql_common = "insert into `member_table`";
	$sql_insert = "(mb_id, mb_name, mb_nick, mb_birthday, mb_gender, mb_mail, mb_sms_ok, mb_parent_tell, mb_job, mb_password)";
	$sql_values = "values (";

	$sql_val = "'".$mb_id."', '".$mb_name."', '".$mb_nick."', '".$birth_day."', '".$mb_gender."', '".$mail."', '".$sms_ok."', '".$p_tell."', '".$jobs."', '".$pass."'";

	$sql_values_end = " ); ";

	$sql = $sql_common." ".$sql_insert." ".$sql_values." ".$sql_val." ".$sql_values_end;

	echo $sql;

	
	mysqli_query($db,$sql);
	mysqli_close($db);

	session_start();

	$_SESSION["mb_id"] = $mb_id;
	$_SESSION['mb_name'] = $mb_name;

	if(isset($_SESSION["mb_id"])) {
		$jb_login = TRUE;
	}
	
	echo "<script class='text/javascript'>
	alert('계정 생성이 완료 되었습니다.');
	location.href='./regist_complete.html';
	</script>";

} else {
	echo "<script class='text/javascript'>
	alert('닉네임, 아이디가 중복되는 계정이 존재합니다.');
	location.href='http://localhost/member/regist_step_01.html';
	</script>";
}