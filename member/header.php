<head>
<title>��Ŀ���н� ���ջ���Ʈ</title>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="stylesheet"  type="text/css" href="/css/default.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="/js/integrate.js"></script>
</head>
<div id="wrapper">
		<div id="header">
			<a href="../index.php"><p class="logo"><img src="/img/integrate/logo.gif" alt="��Ŀ���н�" /></p><a>
			<div class="topmenu">
				<a href="#dialog" name="modal"><img src="/img/integrate/top_icon01.gif" alt="�α���" /></a>
				<!--<a href="#"><img src="/img/integrate/top_icon01_1.gif" alt="�α׾ƿ�" /></a>-->
				<img src="/img/integrate/top_iconbar.gif" alt="|" class="bar" />
				<a href="./regist_step_01.html"><img src="/img/integrate/top_icon02.gif" alt="ȸ������" /></a>
				<!--<a href="#"><img src="/img/integrate/top_icon02_1.gif" alt="�������� ����" /></a>-->
				<img src="/img/integrate/top_iconbar.gif" alt="|" class="bar" />
				<a href="../index.php"><img src="/img/integrate/top_icon03.gif" alt="Ȩ" /></a>
				<img src="/img/integrate/top_iconbar.gif" alt="|" class="bar" />
				<a href="../index.php"><img src="/img/integrate/top_icon04.gif" alt="������������ �߰�" /></a>
				<img src="/img/integrate/top_iconbar.gif" alt="|" class="bar" />
				<a href="#"><img src="/img/integrate/top_icon05.gif" alt="���ã�� �߰�" /></a>
				<a href="#" class="family_site"><img src="/img/integrate/img_familysite.gif" alt="��Ŀ�� �йи�����Ʈ" /></a>
				<ul class="family_link">
					<li><a href="http://www.hackerspass.com/" target="_blank">��Ŀ�� �н��Ӱ�����</a></li>
					<li><a href="#" target="_blank">��Ŀ�� �н��ӱ�&nbsp;&nbsp;&nbsp;��</a></li>
					<li><a href="http://www.hackers.co.kr" target="_blank">��Ŀ������</a></li>
					<li><a href="http://www.hackers.ac" target="_blank">��Ŀ�����п�</a></li>
					<li><a href="http://www.champstudy.com" target="_blank">��������</a></li>
					<li><a href="http://www.hackers.co.kr" target="_blank">��Ŀ���ܽ�</a></li>
					<li><a href="http://www.gohackers.com" target="_blank">��Ŀ������</a></li>
					<li><a href="http://www.jumphackers.com" target="_blank">��Ŀ������</a></li>
					<li><a href="http://recruit.hackers.com/" target="_blank">����ä��</a></li>
					<li><a href="#" target="_blank">��Ŀ�������׷�</a></li>
				</ul>
			</div>
		</div>

			<!--�˾� : �α���-->
	<div id="boxes" >
		<div id="dialog" class="window" >
			<div class="popup_login">
			<form method="post" action="../login.php" onsubmit>
			    <input type="hidden" name="movepage" value="" /> 	
			    <input type="hidden" name="returl" value="" /> 	
				<p class="btnClose"><a href="#"class="close"/><img src="/img/integrate/btn_login_close.gif" alt="�ݱ�" /></a></p>
				<h2><img src="/img/integrate/h2_login.gif" alt="�α���" /></h2>
				<div class="loginBox">
					<div class="textInput">

						<p>
						<label><img src="/img/integrate/login_textID.gif" alt="���̵�" /></label>
						<input type="text" name="login_mb_id" class="text" value="" required/>
						</p>

						<p>
						<label><img src="/img/integrate/login_textPW.gif" alt="��й�ȣ" /></label>
						<input type="password" name="login_mb_pass" class="text" value="" required/>
						</p>

					</div>
					<button class="btnLogin"><img src="/img/integrate/btn_login.gif" alt="�α���" /></button>
									
				</div>
				<div class="loginText">
					<p class="script"><img src="/img/integrate/login_textDivision.gif" alt="��й�ȣ�� ��ҹ��ڸ� �����մϴ�." /></p>
					<input type="checkbox" class="checkbox"><label><img src="/img/integrate/login_textSave.gif" alt="���̵�����" /></label>
				</div>
				<div class="btnJoin">
					<a href="./member/regist_step_01.html"><img src="/img/integrate/btn_login_join.gif" alt="ȸ������"/></a>
					<a href="./member/find_id_phone.html"><img src="/img/integrate/btn_login_find.gif" alt="���̵�/��й�ȣã��"/></a>
				</div>
			</form>
			</div>
		</div>
		<!-- Mask to cover the whole screen -->
		<div id="mask"></div>
	</div>

	<style>
	#boxes .window { position:absolute; left:50%; top:50%; margin-top:-120px; margin-left:-217px; width:434px; height:240px; display:none; z-index:9999; }
	#boxes #dialog { width:434px; height:240px; background:url('../../img/integrate/bg_login.png') no-repeat; }
	.popup_login {}
	.popup_login .btnClose {text-align:right; padding-right:20px; margin-top:20px;}
	.popup_login h2 {padding-left:58px; margin-bottom:20px;}
	.popup_login input.text {width:160px; height:22px; font-size:14px; /*font-weight:bold;*/ font-family:Tahoma; border:1px #969696 solid; line-height:24px; padding:0 4px; color:#4c4c4c;}
	.popup_login .loginBox {padding-left:58px;}
	.popup_login .loginBox .textInput{float:left; width:235px;}
	.popup_login .loginBox p {float:left; width:235px; margin-bottom:2px; *margin-bottom:0px; }
	.popup_login .loginBox label {float:left; width:60px; padding-top:6px;}
	.popup_login .loginBox .btnLogin {}
	.popup_login .loginText {padding-left:58px; margin-top:12px; }
	.popup_login .loginText .checkbox{*margin:-6px -3px -6px -6px;}
	.popup_login .loginText p.script {float:left; width:235px;}
	.popup_login .loginText label {margin-left:3px;}
	.popup_login .btnJoin {border-top:1px #c1c1c1 solid; width:350px; margin-left:42px; margin-top:18px; padding-top:8px; padding-left:16px;}
	.popup_login .btnJoin a {margin-right:17px;}
	#mask { position:absolute; left:0; top:-4px; z-index:9000; background:#000 /*url('../../img/integrate/bg_main.png') repeat*/; display:none;}
	@media screen and (-webkit-min-device-pixel-ratio:0){#mask {top:0;}}
	@-moz-document url-prefix() {#mask {top:0;}}
	</style>