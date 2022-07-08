<head>
<title>해커스패스 통합사이트</title>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="stylesheet"  type="text/css" href="/css/default.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="/js/integrate.js"></script>
</head>
<div id="wrapper">
		<div id="header">
			<a href="../index.php"><p class="logo"><img src="/img/integrate/logo.gif" alt="해커스패스" /></p><a>
			<div class="topmenu">
				<a href="#dialog" name="modal"><img src="/img/integrate/top_icon01.gif" alt="로그인" /></a>
				<!--<a href="#"><img src="/img/integrate/top_icon01_1.gif" alt="로그아웃" /></a>-->
				<img src="/img/integrate/top_iconbar.gif" alt="|" class="bar" />
				<a href="./regist_step_01.html"><img src="/img/integrate/top_icon02.gif" alt="회원가입" /></a>
				<!--<a href="#"><img src="/img/integrate/top_icon02_1.gif" alt="개인정보 수정" /></a>-->
				<img src="/img/integrate/top_iconbar.gif" alt="|" class="bar" />
				<a href="../index.php"><img src="/img/integrate/top_icon03.gif" alt="홈" /></a>
				<img src="/img/integrate/top_iconbar.gif" alt="|" class="bar" />
				<a href="../index.php"><img src="/img/integrate/top_icon04.gif" alt="시작페이지로 추가" /></a>
				<img src="/img/integrate/top_iconbar.gif" alt="|" class="bar" />
				<a href="#"><img src="/img/integrate/top_icon05.gif" alt="즐겨찾기 추가" /></a>
				<a href="#" class="family_site"><img src="/img/integrate/img_familysite.gif" alt="해커스 패밀리사이트" /></a>
				<ul class="family_link">
					<li><a href="http://www.hackerspass.com/" target="_blank">해커스 패스ㅣ공무원</a></li>
					<li><a href="#" target="_blank">해커스 패스ㅣ금&nbsp;&nbsp;&nbsp;융</a></li>
					<li><a href="http://www.hackers.co.kr" target="_blank">해커스토익</a></li>
					<li><a href="http://www.hackers.ac" target="_blank">해커스어학원</a></li>
					<li><a href="http://www.champstudy.com" target="_blank">동영상강의</a></li>
					<li><a href="http://www.hackers.co.kr" target="_blank">해커스텝스</a></li>
					<li><a href="http://www.gohackers.com" target="_blank">해커스토플</a></li>
					<li><a href="http://www.jumphackers.com" target="_blank">해커스수능</a></li>
					<li><a href="http://recruit.hackers.com/" target="_blank">인재채용</a></li>
					<li><a href="#" target="_blank">해커스교육그룹</a></li>
				</ul>
			</div>
		</div>

			<!--팝업 : 로그인-->
	<div id="boxes" >
		<div id="dialog" class="window" >
			<div class="popup_login">
			<form method="post" action="../login.php" onsubmit>
			    <input type="hidden" name="movepage" value="" /> 	
			    <input type="hidden" name="returl" value="" /> 	
				<p class="btnClose"><a href="#"class="close"/><img src="/img/integrate/btn_login_close.gif" alt="닫기" /></a></p>
				<h2><img src="/img/integrate/h2_login.gif" alt="로그인" /></h2>
				<div class="loginBox">
					<div class="textInput">

						<p>
						<label><img src="/img/integrate/login_textID.gif" alt="아이디" /></label>
						<input type="text" name="login_mb_id" class="text" value="" required/>
						</p>

						<p>
						<label><img src="/img/integrate/login_textPW.gif" alt="비밀번호" /></label>
						<input type="password" name="login_mb_pass" class="text" value="" required/>
						</p>

					</div>
					<button class="btnLogin"><img src="/img/integrate/btn_login.gif" alt="로그인" /></button>
									
				</div>
				<div class="loginText">
					<p class="script"><img src="/img/integrate/login_textDivision.gif" alt="비밀번호는 대소문자를 구분합니다." /></p>
					<input type="checkbox" class="checkbox"><label><img src="/img/integrate/login_textSave.gif" alt="아이디저장" /></label>
				</div>
				<div class="btnJoin">
					<a href="./member/regist_step_01.html"><img src="/img/integrate/btn_login_join.gif" alt="회원가입"/></a>
					<a href="./member/find_id_phone.html"><img src="/img/integrate/btn_login_find.gif" alt="아이디/비밀번호찾기"/></a>
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