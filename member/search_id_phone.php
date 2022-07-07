<?php
include("../dbc.php");




$mb_name = $_POST['mb_name'];
$mb_tell = $_POST['f_tell']."-".$_POST['t_tell']."-".$_POST['tt_tell'];
$mb_birthday = $_POST['y_birthday'].".".$_POST['m_birthday'].".".$_POST['d_birthday'];

$cnt_common = "SELECT COUNT(*) as cnt FROM member_table";
$cnt_where = "WHERE mb_name = '".$mb_name."' and mb_tell = '".$mb_tell."' and mb_birthday = '".$mb_birthday."';";
$cnt_sql = $cnt_common." ".$cnt_where;

$cnt_result = mysqli_query($db, $cnt_sql);
$cnt_row = mysqli_fetch_array($cnt_result);

if($cnt_row['cnt'] == '1') {
	$common = "SELECT * FROM member_table";
	$where = "WHERE mb_name = '".$mb_name."' and mb_tell = '".$mb_tell."' and mb_birthday = '".$mb_birthday."'";

	$sql = $common." ".$where.";";

	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_array($result);
?>
	<form action="./find_id_result.html" method="POST" name="frm">
		<input type="hidden" name="mb_name" value=<?=$row['mb_name']?>>
		<input type="hidden" name="mb_id" value=<?=$row['mb_id']?>>
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
		location.href='./find_id_phone.html';
	</script>
	";
}
else {
	echo "
	<script class='text/javascript'>
		alert('계정 정보를 찾던 중 오류가 발생했습니다.');
		location.href='./find_id_phone.html';
	</script>
	";
}


mysqli_close($db);