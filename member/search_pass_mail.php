<?php
include("../dbc.php");

$mb_id = $_POST['mb_id'];
$mb_name = $_POST['mb_name'];
$mb_birthday = $_POST['y_birthday'].".".$_POST['m_birthday'].".".$_POST['d_birthday'];
$mb_mail = $_POST['f_mail']."@".$_POST['t_mail'];

$cnt_common = "SELECT COUNT(*) as cnt FROM member_table";
$cnt_where = "WHERE mb_id = '".$mb_id."' and mb_name = '".$mb_name."' and mb_birthday = '".$mb_birthday."' and mb_mail = '".$mb_mail."'; ";
$cnt_sql = $cnt_common." ".$cnt_where;

$cnt_result = mysqli_query($db,$cnt_sql);
$cnt_row = mysqli_fetch_array($cnt_result);

if($cnt_row['cnt'] == '1') {

	function rand_string( $length ) {
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+/";
		return substr(str_shuffle($chars),0,$length);
	}

	$password = rand_string(8);
	$pass = md5($password);
	
	$common = "UPDATE member_table";
	$set = "SET mb_password = '".$pass."'";
	$where = "WHERE mb_id = '".$mb_id."' and mb_name = '".$mb_name."' and mb_birthday = '".$mb_birthday."' and mb_mail = '".$mb_mail."'; ";
	$sql = $common." ".$set." ".$where;

	mysqli_query($db, $sql);
	
?>

	<form action="./find_pass_result.html" method="POST" name="frm">
		<input type="hidden" name="mb_name" value=<?=$mb_name?>>
		<input type="hidden" name="mb_pass" value=<?=$password?>>
	</form>
	
	<script class="text/javascript">
		document.frm.submit();
	</script>
<?php
}
else if($cnt_row['cnt'] == '0') {
	echo "
	<script class='text/javascript'>
		alert('계정 정보가 없습니다.');
		location.href='./find_id_mail.html';
	</script>
	";
}
else {
	echo "
	<script class='text/javascript'>
		alert('계정 정보를 찾던 중 오류가 발생했습니다.');
		location.href='./find_id_mail.html';
	</script>
	";
}