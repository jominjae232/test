<?php
include("../dbc.php");

$mb_id = $_POST['mb_id'];
$mb_name = $_POST['mb_name'];
$user_type = $_POST['user_type'];
$pass = md5($_POST['pass']);
$mail = $_POST['f_mail']."@".$_POST['t_mail'];
$tell = $_POST['f_tell']."-".$_POST['t_tell']."-".$_POST['tt_tell'];
$sms_ok = $_POST['sms_ok'];
$job = $_POST['jobs'];
$birthday = $_POST['y_birthday'].".".$_POST['m_birthday']."".$_POST['d_birthday'];

if($user_type == '2') {
	$p_tell = $_POST['p_f_tell'].'-'.$_POST['p_t_tell'].'-'.$_POST['p_tt_tell'];
}

// UPDATE 문

// 조건
// 유저 타입 1 -> 비밀번호, 이메일, 휴대폰번호, SMS 수신 여부, 직업
// 유저 타입 2 -> 비밀번호, 이메일, 휴대폰번호, SMS 수신 여부, 직업, 부모님 연락처

// 비어있는 값이 있으면 안 되는 것
// 이메일, 휴대폰번호, 부모님 연락처(유저 타입 2)

if($_POST['t_mail'] != '' && $_POST['t_tell'] != '' && $_POST['tt_tell'] != '') {
	
	
	if($user_type == '1') {
		if($_POST['pass'] == '') {
			$common = "UPDATE member_table SET";
			$set = "mb_mail = '".$mail."', mb_tell = '".$tell."', mb_sms_ok = '".$sms_ok."'";
			$where = "mb_id = '".$mb_id."' and mb_name = '".$mb_name."' and mb_birthday = '".$birthday."'; ";
			$sql = $common." ".$set." ".$where;

			mysqli_query($db,$sql);

			echo "
			<script class='text/javascript'>
				alert('계정 정보 수정을 정상적으로 완료하였습니다.');
				location.href='./modify.html';
			</script>
			";
		}
		else if($_POST['pass'] != '') {
			$common = "UPDATE member_table SET";
			$set = "mb_password = '".$pass."', mb_mail = '".$mail."', mb_tell = '".$tell."', mb_sms_ok = '".$sms_ok."'";
			$where = "mb_id = '".$mb_id."' and mb_name = '".$mb_name."' and mb_birthday = '".$birthday."'; ";
			$sql = $common." ".$set." ".$where;
			
			mysqli_query($db,$sql);

			echo "
			<script class='text/javascript'>
				alert('계정 정보 수정을 정상적으로 완료하였습니다.');
				location.href='./modify.html';
			</script>
			";
		}
		else {
			echo "
			<script class='text/javascript'>
				alert('계정 정보 수정 중 오류가 발생하였습니다.');
				location.href='./modify.html';
			</script>
			";
		}
	}

	
	if($user_type == '2' && $_POST['p_t_tell'] != '' && $_POST['p_tt_tell'] != '') {
		if($_POST['pass'] == '') {
			$common = "UPDATE member_table SET";
			$set = "mb_mail = '".$mail."', mb_tell = '".$tell."', mb_sms_ok = '".$sms_ok."', mb_parent_tell = '".$p_tell."'";
			$where = "mb_id = '".$mb_id."' and mb_name = '".$mb_name."' and mb_birthday = '".$birthday."'; ";
			$sql = $common." ".$set." ".$where;

			mysqli_query($db,$sql);

			echo "
			<script class='text/javascript'>
				alert('계정 정보 수정을 정상적으로 완료하였습니다.');
				location.href='./modify.html';
			</script>
			";
		}
		else if($_POST['pass'] != '') {
			$common = "UPDATE member_table SET";
			$set = "mb_password = '".$pass."', mb_mail = '".$mail."', mb_tell = '".$tell."', mb_sms_ok = '".$sms_ok."', mb_parent_tell = '".$p_tell."'";
			$where = "mb_id = '".$mb_id."' and mb_name = '".$mb_name."' and mb_birthday = '".$birthday."'; ";
			$sql = $common." ".$set." ".$where;
			
			mysqli_query($db,$sql);

			echo "
			<script class='text/javascript'>
				alert('계정 정보 수정을 정상적으로 완료하였습니다.');
				location.href='./modify.html';
			</script>
			";
		}
		else {
			echo "
			<script class='text/javascript'>
				alert('계정 정보 수정 중 오류가 발생하였습니다.');
				location.href='./modify.html';
			</script>
			";
		}
	}


}
else if($_POST['t_mail'] == '' || $_POST['t_tell'] == '' || $_POST['tt_tell'] == '') {
	echo "
	<script class='text/javascript'>
		alert('비어 있어서는 안되는 값이 비어있습니다.');
		location.href='./modify.html';
	</script>
	";
}
else {
	echo "
	<script class='text/javascript'>
		alert('계정 정보 수정 중 오류가 발생하였습니다.');
		location.href='./modify.html';
	</script>
	";
}
mysqli_close($db);
