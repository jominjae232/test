<?php include("../dbc.php");

$mb_birth = "";
$mb_birth .= $_POST['y_birthday'];
$mb_birth .= $_POST['m_birthday'];
$mb_birth .= $_POST['d_birthday'];

$tell = "";
$tell .= $_POST['first_tell'];
$tell .= $_POST['two_tell'];
$tell .= $_POST['third_tell'];

$mb_name = $_POST['mb_name'];

$gender = $_POST['gender'];

if($_POST['two_tell'] == '' || $_POST['third_tell'] == '' || $mb_name == '') {

	echo "
	<script>
		alert('비어있는 정보가 존재합니다.');
		location.href = 'http://localhost/member/regist_step_03.html?type=".$_POST['type']."';
	</script>
	";

}

$sql = "select count(*) as cnt from `member_table`
where mb_name = '$mb_name'
and mb_birthday = '$mb_birth'
and mb_gender = '$gender'
and mb_tell = '$tell'";

$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);

//echo $row['cnt'];

if($row['cnt'] == '1') { 

echo "
<script class='text/javascript'>
	alert('이미 존재하는 회원입니다.');
	location.href = 'http://localhost/member/regist_step_03.html?type=".$_POST['type']."';
</script>
";

} else { 
?>

	<form action="./regist_step_04.html" method="POST" id="frm" name="frm">
		<input type="hidden" name="mb_name" value=<?=$mb_name?>>
		<input type="hidden" name="y_birth" value=<?=$_POST['y_birthday']?>>
		<input type="hidden" name="m_birth" value=<?=$_POST['m_birthday']?>>
		<input type="hidden" name="d_birth" value=<?=$_POST['d_birthday']?>>
		<input type="hidden" name="mb_gender" value=<?=$_POST['gender']?>>
		<input type="hidden" name="first_tell" value=<?=$_POST['first_tell']?>>
		<input type="hidden" name="two_tell" value=<?=$_POST['two_tell']?>>
		<input type="hidden" name="third_tell" value=<?=$_POST['third_tell']?>>
		<input type="hidden" name="type" value="<?=$_POST['type']?>">
	</form>

	<script>
		document.frm.submit();
	</script>


	<!-- $url = "http://localhost/member/regist_step_04.html?type=".$_POST['type']."";

	echo "
	<script class='javascript'>
		location.href = '".$url."'
	</script>
	"; -->
<?php
}
mysqli_close($db);
?>

