<?php
session_start();
session_destroy();
echo "
<script class='text/javascript'>
	alert('�α׾ƿ� �Ǿ����ϴ�.');
	location.href='./index.php';
</script>
";
