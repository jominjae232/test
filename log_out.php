<?php
session_start();
session_destroy();
echo "
<script class='text/javascript'>
	alert('로그아웃 되었습니다.');
	location.href='./index.php';
</script>
";
