<?php
include("../dbc.php");

$mb_id = $_POST['mb_id'];
$mb_name = $_POST['mb_name'];
$birthday = $_POST['y_birthday'].'.'.$_POST['m_birthday'].'.'.$_POST['d_birthday'];
$tell = $_POST['f_tell'].'-'.$_POST['t_tell'].'-'.$_POST['tt_tell'];

$cnt_common = "SELECT COUNT(*) as cnt FROM member_table";
$cnt_where = "WHERE mb_id = '".$mb_id."' and mb_name = '".$mb_name."' and mb_birthday = '".$birthday."' and mb_tell = '".$tell."'";
$cnt_sql = $cnt_common." ".$cnt_where.";";

$cnt_result = mysqli_query($db, $cnt_sql);
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
	$where = "WHERE mb_id = '".$mb_id."' and mb_name = '".$mb_name."' and mb_birthday = '".$birthday."' and mb_tell = '".$tell."';";

	$sql = $common.' '.$set.' '.$where;

	mysqli_query($db, $sql);

?>
	<form action="./find_pass_result.html" method="POST" name="frm">
		<input type="hidden" value=<?=$password?> name="mb_pass">
		<input type="hidden" value=<?=$mb_name?> name="mb_name">
	</form>
	<script class="text/javascript">
		document.frm.submit();
	</script>

<?php
}
else if($cnt_row['cnt'] == '0') {
	echo "
	<script class='text/javascript'>
		alert('해당 되는 유저의 정보를 찾지 못하였습니다.');
		loaction.href='./find_id_phone.html';
	</script>
	";
}
else {
	echo "
	<script class='text/javascript'>
		alert('정보를 찾던 중 오류가 발생하였습니다.');
		location.href='./find_id_phone.html';
	</script>
	";
}


mysqli_close($db);