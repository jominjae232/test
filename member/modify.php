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

// UPDATE ��

// ����
// ���� Ÿ�� 1 -> ��й�ȣ, �̸���, �޴�����ȣ, SMS ���� ����, ����
// ���� Ÿ�� 2 -> ��й�ȣ, �̸���, �޴�����ȣ, SMS ���� ����, ����, �θ�� ����ó

// ����ִ� ���� ������ �� �Ǵ� ��
// �̸���, �޴�����ȣ, �θ�� ����ó(���� Ÿ�� 2)

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
				alert('���� ���� ������ ���������� �Ϸ��Ͽ����ϴ�.');
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
				alert('���� ���� ������ ���������� �Ϸ��Ͽ����ϴ�.');
				location.href='./modify.html';
			</script>
			";
		}
		else {
			echo "
			<script class='text/javascript'>
				alert('���� ���� ���� �� ������ �߻��Ͽ����ϴ�.');
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
				alert('���� ���� ������ ���������� �Ϸ��Ͽ����ϴ�.');
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
				alert('���� ���� ������ ���������� �Ϸ��Ͽ����ϴ�.');
				location.href='./modify.html';
			</script>
			";
		}
		else {
			echo "
			<script class='text/javascript'>
				alert('���� ���� ���� �� ������ �߻��Ͽ����ϴ�.');
				location.href='./modify.html';
			</script>
			";
		}
	}


}
else if($_POST['t_mail'] == '' || $_POST['t_tell'] == '' || $_POST['tt_tell'] == '') {
	echo "
	<script class='text/javascript'>
		alert('��� �־�� �ȵǴ� ���� ����ֽ��ϴ�.');
		location.href='./modify.html';
	</script>
	";
}
else {
	echo "
	<script class='text/javascript'>
		alert('���� ���� ���� �� ������ �߻��Ͽ����ϴ�.');
		location.href='./modify.html';
	</script>
	";
}
mysqli_close($db);
