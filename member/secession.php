<?php
include("../dbc.php");

if(isset($_POST['mb_id'])) {
	$mb_id = $_POST['mb_id'];
}

if(isset($_POST['mb_name'])) {
	$mb_name = $_POST['mb_name'];
}

if(isset($_POST['pass'])) {
	$mb_pass = md5($_POST['pass']);
}

$reason = '';

if(isset($_POST['reason_type1'])) {
	$reason_type1 = $_POST['reason_type1'];
	$reason .= '|'.$reason_type1;
}
if(isset($_POST['reason_type2'])) {
	$reason_type2 = $_POST['reason_type2'];
	$reason .= '|'.$reason_type2;
}
if(isset($_POST['reason_type3'])) {
	$reason_type3 = $_POST['reason_type3'];
	$reason .= '|'.$reason_type3;
}
if(isset($_POST['reason_type4'])) {
	$reason_type4 = $_POST['reason_type4'];
	$reason .= '|'.$reason_type4;
}
if(isset($_POST['reason_type5'])) {
	$reason_type5 = $_POST['reason_type5'];
	$reason .= '|'.$reason_type5;
}
if(isset($_POST['reason_type6'])) {
	$reason_type6 = $_POST['reason_type6'];
	$reason .= '|'.$reason_type6;
}

if(isset($_POST['chk_reason'])) {
	$chk_reason = $_POST['chk_reason'];
}

// memer_table ���̺� �����ϴ� ������ ���� ó��
// secession ���̺� ������ ȸ���� ������ insert
// ����, ȸ���� �ۼ��Ͽ� ���� ��й�ȣ�� ���� �ʴ´ٸ�, return
// ������ reason ������ �� ���� ����

$search_common = "SELECT COUNT(*) as cnt FROM member_table";
$search_where = "WHERE mb_name = '".$mb_name."' and mb_id = '".$mb_id."' and mb_password = '".$mb_pass."'; ";
$search_sql = $search_common." ".$search_where;

$search_result = mysqli_query($db,$search_sql);
$search_row = mysqli_fetch_array($search_result);

if($search_row['cnt'] == '1') {
$d_common = "DELETE FROM secession";
$d_where = "WHERE mb_id = '".$mb_id."' and mb_name = '".$mb_name."' and mb_password = '".$mb_pass."'; ";
$d_sql = $d_common." ".$d_where;

mysqli_query($db,$d_sql);

$common = "INSERT INTO secession";
$column = "(mb_name, mb_id, mb_password, reason, chk_reason)";
$value ="values ('".$mb_name."', '".$mb_id."', '".$mb_pass."','".$reason."', '".$chk_reason."')";
$where = "WHERE mb_id = '".$mb_id."' and mb_name = '".$mb_name."' and mb_password = '".$mb_pass."'; ";
$sql = $common." ".$column." ".$value." ".$where;

mysqli_query($db,$sql);



echo "
<script class='text/javascript'>
	alert('���� ���� ������ �Ϸ��Ͽ����ϴ�.');
	location.href='../index.php';
</script>
";


}
else if($search_row['cnt'] == '0') {

echo "
<script class='text/javascript'>
	alert('��й�ȣ�� �߸� �Է��ϼ̽��ϴ�.');
	location.href='./secession.html';
</script>
";

}
else {

echo "
<script class='text/javascript'>
	alert('���� ������ ã�� �� ������ �߻��Ͽ����ϴ�.');
	location.href='./secession.html';
</script>
";

}

mysqli_close($db);