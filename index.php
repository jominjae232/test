<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<title>합격포털, 해커스 패스닷컴 :: 9급공무원, 공무원영어, 공인중개사, 취업, 금융자격증, 세무/회계자격증, 학점은행제, TOEIC, TEPS</title>
<meta name="keywords" content="9급공무원, 공인중개사, 펀드투자상담사, 파생상품투자상담사, 증권투자상담사, 공무원영어, 금융자격증, 세무, 회계자격증, TOEIC, TEPS, 토익, 텝스, 학점은행제, 취업" />
<meta name="description" content="9급공무원, 공인중개사, 펀드투자상담사, 파생상품투자상담사, 증권투자상담사, 공무원영어, 금융자격증, 세무, 회계자격증, TOEIC, TEPS, 토익, 텝스, 학점은행제, 취업" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="shortcut icon" href="/img/icon/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="/css/default.css" />
<link rel="stylesheet" type="text/css" href="/css/integrate.css" />
<script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/js/integrate.js"></script>
<script type="text/javascript">

function allPopClose(setName){ $("#"+setName).hide(); }
$(function(){
	rollingB("issue_tab","issue_banner");
	rollingC("book_tab","book_banner");

	$("#mainMenu li").hover(function(){
        $(this).children().children("img.passimg").attr("src",$(this).children().children("img.passimg").attr("src").replace("_off","_on"));
		$(this).children().children("img.passicon").attr("src",$(this).children().children("img.passicon").attr("src").replace("_off","_on"));
    },function(){
        $(this).children().children("img.passimg").attr("src",$(this).children().children("img.passimg").attr("src").replace("_on","_off"));
		$(this).children().children("img.passicon").attr("src",$(this).children().children("img.passicon").attr("src").replace("_on","_off"));
    });

});
</script>



</head>
<?php 
session_start();
//var_dump($_SESSION);
?>
<body>

<?php if(isset($_SESSION['mb_name']) && isset($_SESSION['mb_id'])) { ?>
<nav>
    <a href="./index.php" alt="해커스 패스닷컴"><h1 style="font-size:20px; padding:20px;">해커스 패스닷컴</h1></a>
    <ul class="menu">
        <li><a href="./member/modify.html" alt="개인정보수정">개인정보수정</a></li>
        <li><a href="./member/secession.html" alt="회원탈퇴">회원탈퇴</a></li>
    </ul>
</nav>
<?php } else { ?>
<nav>
    <a href="./index.php" alt="해커스 패스닷컴"><h1 style="font-size:20px; padding:20px;">해커스 패스닷컴</h1></a>
    <ul class="menu">
        <li><a href="#dialog"  name="modal" alt="로그인">로그인</a></li>
        <li><a href="./member/regist_step_01.html" alt="회원가입">회원가입</a></li>
    </ul>
</nav>
<?php } ?>

<style class="text/css">
    nav{ 
        width:200px; 
        background-color:#eee; 
        border-right:1px solid #ddd;
        /* height:100% 그냥 적용 안됨. 부모개념이 있어야 채워질 수 있음 */

        position:fixed; /*공중에 떠서 공간을 차지하지 않음*/
        height:100% /*fixed를 해서 높이 100%가 가능해짐*/
    }
    h1{padding:20px; }
    .menu {}
    .menu li {}

    /*메뉴*/
    .menu li a {
        height:30px;
        line-height:30px;
        display:block;
        padding:0 20px;
        font-size:12px;
        color:#555;
    }
    .menu li a:hover { background-color:yellowgreen; color:white;}
</style>

<div id="wrapper">

<?php
if(!isset($_SESSION['mb_name']) && isset($_SESSION['mb_id'])) {
	unset($_SESSION['mb_id']);
}
?>
	
<div id="header">

	<div class="toplink">
		<ul >
			<li><a href="http://www.champstudy.com" title="챔프스터디" target="_blank"><img src="/img/integrate/top_menu_1.gif" alt="챔프스터디" /></a></li>
			<li><a href="http://gosi.pass.com" title="해커스 패스닷컴 9급공무원" target="_blank"><img src="/img/integrate/top_menu_2.gif" alt="9급공무원" /></a></li>
			<li><a href="http://police.pass.com" title="해커스 패스닷컴 경찰공무원" target="_blank"><img src="/img/integrate/top_menu_13.gif" alt="경찰공무원" /></a></li>
			<li><a href="http://fn.pass.com" title="해커스 패스닷컴 금융" target="_blank"><img src="/img/integrate/top_menu_3.gif" alt="해커스 패스닷컴 금융" /></a></li>
			<li><a href="http://land.pass.com" title="해커스 패스닷컴 공인중개사ㆍ행정사" target="_blank"><img src="/img/integrate/top_menu_4.gif" alt="해커스 패스닷컴 공인중개사ㆍ행정사" /></a></li>
			<li><a href="http://www.hackersjob.com" title="해커스잡" target="_blank"><img src="/img/integrate/top_menu_5.gif" alt="해커스잡" /></a></li>
			<li><a href="http://www.hackers.co.kr/" title="해커스영어" target="_blank"><img src="/img/integrate/top_menu_6.gif" alt="해커스영어" /></a></li>
			<li><a href="http://www.gohackers.com/" title="고우해커스" target="_blank"><img src="/img/integrate/top_menu_7.gif" alt="고우해커스" /></a></li>
			<li><a href="http://www.hackersuhak.com/" title="해커스유학" target="_blank"><img src="/img/integrate/top_menu_14.gif" alt="해커스유학" /></a></li>
			<li><a href="http://www.hackers.ac/" title="해커스 어학원" target="_blank"><img src="/img/integrate/top_menu_8.gif" alt="해커스 어학원" /></a></li>
			<li><a href="http://start.champstudy.com/" title="기초영어 전문관" target="_blank"><img src="/img/integrate/top_menu_12.gif" alt="기초영어 전문관" /></a></li>
			<li><a href="http://www.jumphackers.com/" title="점프해커스" target="_blank"><img src="/img/integrate/top_menu_9.gif" alt="점프해커스" /></a></li>
			<li><a href="http://www.hackers.com/index_gateway.html" title="해커스 닷컴" target="_blank"><img src="/img/integrate/top_menu_10.gif" alt="해커스 닷컴" /></a></li>
			<li><a href="http://www.hackers.com/" title="해커스 채용" target="_blank"><img src="/img/integrate/top_menu_11.gif" alt="해커스 채용" /></a></li>
		</ul>
	</div>
	<p class="logo" >
		<a href="http://www.pass.com"><img src="/img/integrate/logo.gif" alt="해커스패스" /></a>
		<a href="http://www.hackers.co.kr/Html/S_Toeic/index.html?id=B_TOEIC_QA&no=469515" target="_blank" style="margin-left:27px;"><img src="/img/integrate/top_emblem.gif" alt="브랜드대상" /></a>
	</p>
	<div class="topmenu">
		<?php if(!isset($_SESSION["mb_id"]) || !isset($_SESSION["mb_name"])) { ?>
		<a href="#dialog" name="modal"><img src="/img/integrate/top_icon01.gif" alt="로그인" /></a>
			<img src="/img/integrate/top_iconbar.gif" alt="|" class="bar" />
		<a href="./member/regist_step_01.html"><img src="/img/integrate/top_icon02.gif" alt="회원가입" /></a>
			<img src="/img/integrate/top_iconbar.gif" alt="|" class="bar" />
		<?php } else if(isset($_SESSION['mb_id']) && isset($_SESSION['mb_name'])) { ?>

		<a href="./log_out.php">
			<img src="/img/integrate/top_icon01_1.gif" alt="로그아웃" />
		</a>

		<a href="./member/modify.html"><img src="/img/integrate/top_icon02_1.gif" alt="정보수정" /></a>
		<?php } ?>
		
		<a href="./index.php">
			<img src="/img/integrate/top_icon03.gif" alt="홈" /></a>
	</div>
</div>
	<!-- container -->
	<div id="container">
					<div  class="content">
			
<div class="mainMenu" id="mainMenu">
	<ul >
		<li><!--공무원학원-->
			<a href="http://gosi.pass.com/?keywd=130703_passgatemain_thumbnail&logger_kw=130703_passgatemain_thumbnail&source=logger_kw " target="_blank">
				<img src="/img/main/mainbanner/main_icon_off_01.png" alt="" class="passicon" style="display:none;"/>
				<img src="/img/main/mainbanner/main_menu_off_01.gif" alt="" class="passimg"/>
			</a>
			<div class="ad_banner"><a href="http://gosi.pass.com/html/mmove.htm?st=info&id=pservant_lec2_sev3&keywd=131119_passgatethumnail_1130presentation&logger_kw=131119_passgatethumnail_1130presentation&ssource=logger_kw" target="_blank" class="btnRED"><img src="/img/main/mainbanner/tit_text01.png" alt="" /></a></div>
		</li>
		<li><!--공무원동영상-->
			<a href="http://egosi.pass.com/?keywd=egosimain_passgate_20130703&logger_kw=egosimain_passgate_20130703&source=logger_kw" target="_blank">
				<img src="/img/main/mainbanner/main_icon_off_02.png" alt="" class="passicon" style="display:none;"/>
				<img src="/img/main/mainbanner/main_menu_off_02.gif" alt=""  class="passimg"/>
			</a>
			<div class="ad_banner"><a href="http://egosi.pass.com/site/?c=superpass3&_C_=3241&keywd=131119_passgatethumnail_superpass&logger_kw=131119_passgatethumnail_superpass&source=logger_kw" target="_blank" class="btnRED"><img src="/img/main/mainbanner/tit_text02.png" alt="" /></a></div>
		</li>
		<li><!--경찰학원-->
			
			<a href="http://epolice.pass.com/?keywd=egosimain_passgate_20130703&logger_kw=egosimain_passgate_20130703&source=logger_kw" target="_blank">
				<img src="/img/main/mainbanner/main_icon_off_03.png" alt="" class="passicon" style="display:none;"/>
				<img src="/img/main/mainbanner/main_menu_off_03.gif" alt=""  class="passimg"/>
			</a>
			<div class="ad_banner"><a href="http://police.pass.com/html/mmove.htm?st=lecture&id=class_intro_new&keywd=131119_passgatethumnail_poliregi&logger_kw=131119_passgatethumnail_poliregi&source=logger_kw" target="_blank" class="btndarkBlue"><img src="/img/main/mainbanner/tit_text03.png" alt="" /></a></div>
		</li>
		<li><!--경찰동영상-->
			<a href="http://epolice.pass.com/?keywd=egosimain_passgate_20130703&logger_kw=egosimain_passgate_20130703&source=logger_kw" target="_blank">
				<img src="/img/main/mainbanner/main_icon_off_04.png" alt="" class="passicon" style="display:none;"/>
				<img src="/img/main/mainbanner/main_menu_off_04.gif" alt=""  class="passimg"/>
			</a>
			<div class="ad_banner"><a href="http://epolice.pass.com/site/?c=superpass&keywd=131119_passgatethumnail_polisuperpass&logger_kw=131119_passgatethumnail_polisuperpass&source=logger_kw" target="_blank" class="btndarkBlue"><img src="/img/main/mainbanner/tit_text04.png" alt="" /></a></div>
		</li>
		<li><!--중개사학원-->
			<a href="http://land.pass.com/" target="_blank">
				<img src="/img/main/mainbanner/main_icon_off_05.png" alt="" class="passicon" style="display:none;"/>
				<img src="/img/main/mainbanner/main_menu_off_05.gif" alt="" class="passimg"/>
			</a>
			<div class="ad_banner"><a href="http://land.pass.com/site/?st=class_info&idx=201&type=17&_C_=3282 " target="_blank" class="btnGREEN"><img src="/img/main/mainbanner/tit_text05.png" alt="" /></a></div>
		</li>
		<li><!--중개사동영상-->
			<a href="http://eland.pass.com/?keywd=elandmain_passgate_20130703&logger_kw=elandmain_passgate_20130703&source=logger_kw" target="_blank">
				<img src="/img/main/mainbanner/main_icon_off_06.png" alt="" class="passicon" style="display:none;"/>
				<img src="/img/main/mainbanner/main_menu_off_06.gif" alt=""  class="passimg"/>
			</a>
			<div class="ad_banner"><a href="http://eland.pass.com/site/?c=event_131025&_C_=2949" target="_blank" class="btnGREEN"><img src="/img/main/mainbanner/tit_text06.png" alt="" /></a></div>
		</li>
		<li><!--부동산경매-->
			<a href="http://land.pass.com/site/?st=class_info3&idx=g02&_C_=2708" target="_blank">
				<img src="/img/main/mainbanner/main_icon_off_07.png" alt="" class="passicon" style="display:none;"/>
				<img src="/img/main/mainbanner/main_menu_off_07.gif" alt=""  class="passimg"/>
			</a>
			<div class="ad_banner"><a href="http://land.pass.com/site/?st=class_info3&idx=g02&type=15&site_part=g&_C_=3139" target="_blank" class="btnBROWN"><img src="/img/main/mainbanner/tit_text07.png" alt="" /></a></div>
		</li>
		<li><!--행정사-->
			<a href="http://eland.pass.com/site/?c=hang_comming&big_cate=2&keywd=passgate_comingsoon_20131015&logger_kw=passgate_comingsoon_20131015&source=logger_kw" target="_blank">
				<img src="/img/main/mainbanner/main_icon_off_08.png" alt="" class="passicon" />
				<img src="/img/main/mainbanner/main_menu_off_08.gif" alt="" class="passimg" />
			</a>
			<div class="ad_banner"  style="display:none;"><a href="#" target="_blank" class="btnPUPLE"></a></div>
		</li>
		<li><!--금융-->
			<a href="http://fn.pass.com/&_C_=3316" target="_blank">
				<img src="/img/main/mainbanner/main_icon_off_09.png" alt="" class="passicon" style="display:none;"/>
				<img src="/img/main/mainbanner/main_menu_off_09.gif" alt=""  class="passimg"/>
			</a>
			<div class="ad_banner"><a href="http://fn.pass.com/bbs/board.php?id=notice&no=106&lnb=6&_C_=3366" target="_blank" class="btnBLUE"><img src="/img/main/mainbanner/tit_text08.png" alt="" /></a></div>
		</li>
		<li><!--AFPK-->
			<a href="http://fn.pass.com/site/?st=fp_list&big_cart=1&middle_cart=117&_C_=3242" target="_blank">
				<img src="/img/main/mainbanner/main_icon_off_10.png" alt="" class="passicon" style="display:none;"/>
				<img src="/img/main/mainbanner/main_menu_off_10.gif" alt=""  class="passimg"/>
			</a>
			<div class="ad_banner"><a href="http://fn.pass.com/bbs/board.php?id=notice&no=163&lnb=6" target="_blank" class="btnBLUE"><img src="/img/main/mainbanner/tit_text09.png" alt="" /></a></div>
		</li>
		<li><!--영어-->
			<a href="http://www.champstudy.com/?keywd=champmain_passgate_20130703&logger_kw=champmain_passgate_20130703&source=logger_kw" target="_blank">
				<img src="/img/main/mainbanner/main_icon_off_11.png" alt="" class="passicon" style="display:none;"/>
				<img src="/img/main/mainbanner/main_menu_off_11.gif" alt=""  class="passimg"/>
			</a>
			<div class="ad_banner"><a href="http://www.champstudy.com/bbs/zboard.php?id=notice&no=667&_C_=3285" target="_blank" class="btnGREEN"><img src="/img/main/mainbanner/tit_text10.png" alt="" /></a></div>
		</li>
		<li><!--취업-->
			<a href="http://www.champstudy.com/Champ_M/?go=biz&book_select=&middle=18&keywd=champbizmain_passgate_20130703&logger_kw=champbizmain_passgate_20130703&source=logger_kw" target="_blank">
				<img src="/img/main/mainbanner/main_icon_off_12.png" alt="" class="passicon" style="display:none;"/>
				<img src="/img/main/mainbanner/main_menu_off_12.gif" alt=""  class="passimg"/>
			</a>
			<div class="ad_banner"><a href="http://www.champstudy.com/bbs/zboard.php?id=notice&no=395&_C_=3286" target="_blank" class="btnGREEN"><img src="/img/main/mainbanner/tit_text11.png" alt="" /></a></div>
		</li>
		<li><!--독학사-->
			<a href="http://www.haksa2080.com/?_C_=1528" target="_blank">
				<img src="/img/main/mainbanner/main_icon_off_13.png" alt="" class="passicon" />
				<img src="/img/main/mainbanner/main_menu_off_13.gif" alt=""  class="passimg"/>
			</a>
			<div class="ad_banner" style="display:none;"><a href="#" target="_blank" class="btnORANGE"></a></div>
		</li>
		<li><!--평생교육원-->
			<a href="http://www.edu2080.co.kr/event/partner_event.asp?PCD=57yfb&_C_=1620" target="_blank">
				<img src="/img/main/mainbanner/main_icon_off_14.png" alt="" class="passicon" style="display:none;"/>
				<img src="/img/main/mainbanner/main_menu_off_14.gif" alt=""  class="passimg"/>
			</a>
			<div class="ad_banner"><a href="http://www.edu2080.co.kr/event/partner_event.asp?PCD=57yfb&_C_=1620" target="_blank" class="btnORANGE"><img src="/img/main/mainbanner/tit_text12.png" alt="" /></a></div>
		</li>
		<li><p><img src="/img/main/mainbanner/main_icon_off_15.png" alt="" class="passicon lasticon" /><img src="/img/main/mainbanner/main_menu_15_on.gif" alt="해커스 패스닷컴이 합격을 기원합니다!"  class="passimg"/></p></li>
	</ul>
</div>

<div class="board">
    <!--issue-->
    <div class="issue" style="width:1000px; margin-bottom:40px;">
        <h3><img src="/img/integrate/h3_issue.gif" alt="패스닷컴 핫이슈" /></h3>
                <ul id="issue_tab">
                        <li><a href="#"><img src="/img/integrate/dot_on.gif" alt="" /></a></li>
                        <li><a href="#"><img src="/img/integrate/dot_off.gif" alt="" /></a></li>
                        <li><a href="#"><img src="/img/integrate/dot_off.gif" alt="" /></a></li>
                        <li><a href="#"><img src="/img/integrate/dot_off.gif" alt="" /></a></li>
                        <li><a href="#"><img src="/img/integrate/dot_off.gif" alt="" /></a></li>
                    </ul>
        <ul id="issue_banner" style="width:1000px;">
                        <li >
                <a href="http://gosi.pass.com/html/mmove.htm?id=pservant_lec2_sev3&keywd=1107_passcom494160_20presentation1&logger_kw=1107_passcom494160_20presentation1&source=logger_kw" target="_blank" class="left">
                    <img src="http://fn.pass.com//zfiles/banner_img/20131112135825.gif" alt="" />
                </a>
                <a href="http://egosi.pass.com/site/?c=superpass3&_C_=2566" target="_blank">
                    <img src="http://fn.pass.com//zfiles/banner_img/20131002173916.jpg" alt="" />
                </a>
            </li>
                        <li style="display:none;">
                <a href="http://fn.pass.com/bbs/board.php?id=notice&no=161&lnb=6&_C_=3375" target="_blank" class="left">
                    <img src="http://fn.pass.com//zfiles/banner_img/20131122190737.gif" alt="" />
                </a>
                <a href="http://fn.pass.com/bbs/board.php?id=notice&no=163&lnb=6&_C_=3373" target="_blank">
                    <img src="http://fn.pass.com//zfiles/banner_img/20131122190008.gif" alt="" />
                </a>
            </li>
                        <li style="display:none;">
                <a href="http://land.pass.com/site/?st=class_info&idx=201&type=17&_C_=2895" target="_blank" class="left">
                    <img src="http://fn.pass.com//zfiles/banner_img/20131120184911.gif" alt="" />
                </a>
                <a href="http://eland.pass.com/site/?c=event_131025&_C_=2936" target="_blank">
                    <img src="http://fn.pass.com//zfiles/banner_img/20131101113533.gif" alt="" />
                </a>
            </li>
                        <li style="display:none;">
                <a href="http://land.pass.com/site/?st=class_info3&idx=g02&type=15&site_part=g&_C_=3139" target="_blank" class="left">
                    <img src="http://fn.pass.com//zfiles/banner_img/20131120103705.jpg" alt="" />
                </a>
                <a href="http://land.pass.com/site/?st=class_info&idx=222&briefing_day=20131123&_C_=3250" target="_blank">
                    <img src="http://fn.pass.com//zfiles/banner_img/20131122184327.jpg" alt="" />
                </a>
            </li>
                        <li style="display:none;">
                <a href="http://www.haksa2080.com/?c=lecpack&cate=3" target="_blank" class="left">
                    <img src="http://fn.pass.com//zfiles/banner_img/20130816154600.jpg" alt="" />
                </a>
                <a href="http://www.edu2080.co.kr/event/partner_event.asp?PCD=57yfb&_C_=1620" target="_blank">
                    <img src="http://fn.pass.com//zfiles/banner_img/20131104143614.gif" alt="" />
                </a>
            </li>
                    </ul>
    </div>
    <!--//issue-->
    <!--notice-->
    <div class="notice" style="width:494px;">
        <h3><img src="/img/integrate/h3_notice.gif" alt="패스닷컴 공지사항" /></h3>
        <div class="notice_btn">
            <span class="pre"><img src="/img/integrate/btn_pre.gif" alt="pre" /></span>
            <span class="next"><img src="/img/integrate/btn_next.gif" alt="next" /></span>
        </div>
            <ul class="page1">
                                                    <li>
                            <p class="type">공무원</p>
                            <p class="subject">
                                <a href="http://gosi.pass.com/html/mmove.htm?id=pservant_lec2_sev3&keywd=1111_gategongzi_1130presentation&logger_kw=1111_gategongzi_1130presentation&source=logger_kw" target="_blank">[설명회] 스무살에 공무원되는 비법 공개! (11/..</a>
                            </p>
                            <p class="date">2013-11-11</p>
                        </li>
                                                    <li>
                            <p class="type">공무원</p>
                            <p class="subject">
                                <a href="http://egosi.pass.com/site/?c=superpass3&_C_=3140" target="_blank">[최대 97% 할인] 월 3만원대에 공무원 인강 자..</a>
                            </p>
                            <p class="date">2013-11-11</p>
                        </li>
                                                    <li>
                            <p class="type">금융</p>
                            <p class="subject">
                                <a href="http://fn.pass.com/bbs/board.php?id=notice&no=161&lnb=6&_C_=3378" target="_blank">[은행FP최종마무리] 12시간만에 끝내는 은행FP!..</a>
                            </p>
                            <p class="date">2013-11-11</p>
                        </li>
                                                    <li>
                            <p class="type">금융</p>
                            <p class="subject">
                                <a href="http://fn.pass.com/site/?st=fp_view&lec_no=729&big_cart=1&middle_cart=117&_C_=3301" target="_blank">[3월 AFPK 완벽대비!] 최대 13만원 지원!</a>
                            </p>
                            <p class="date">2013-11-11</p>
                        </li>
                                                    <li>
                            <p class="type">중개사</p>
                            <p class="subject">
                                <a href="http://eland.pass.com/site/?c=board&no=165" target="_blank">[최대92%할인] 동영상 연간회원반 2014 최신교..</a>
                            </p>
                            <p class="date">2013-11-05</p>
                        </li>
                                                    <li>
                            <p class="type">중개사</p>
                            <p class="subject">
                                <a href="http://eland.pass.com/site/?c=board&site=&no=168" target="_blank">[파격혜택] 중개사 시험후기 남기고, 부동산경매 학..</a>
                            </p>
                            <p class="date">2013-11-05</p>
                        </li>
                                                    <li>
                            <p class="type">공무원</p>
                            <p class="subject">
                                <a href="http://gosi.pass.com/html/mmove.htm?id=matching&keywd=1112_passcomgongzi_matching&logger_kw=1112_passcomgongzi_matching&source=logger_kw" target="_blank">2013 9급 공무원시험 적중신화!</a>
                            </p>
                            <p class="date">2013-11-12</p>
                        </li>
                                                    <li>
                            <p class="type">중개사</p>
                            <p class="subject">
                                <a href="http://land.pass.com/bbs/zboard.php?id=notice&page=1&sn1=&divpage=1&sn=off&ss=on&sc=on&select_arrange=headnum&desc=asc&no=162&bbs_no=&no=162" target="_blank">[11/30까지] 2014 공인중개사학원 연회원 할..</a>
                            </p>
                            <p class="date">2013-11-30</p>
                        </li>
                                                </ul>
                    <ul class="page2" style="display:none;">
                                        <li>
                            <p class="type">공무원</p>
                            <p class="subject">
                                <a href="http://gosi.pass.com/html/mmove.htm?id=testexam&keywd=1111_gategongzi_2ndexam&logger_kw=1111_gategongzi_2ndexam&source=logger_kw" target="_blank">[모의고사] 2014대비 제2회 적중모의고사★100..</a>
                            </p>
                            <p class="date">2013-11-11</p>
                        </li>
                                                    <li>
                            <p class="type">금융</p>
                            <p class="subject">
                                <a href="http://fn.pass.com/bbs/board.php?id=notice&no=106&lnb=6&_C_=3302" target="_blank">[금융 5종] 초단기 합격 패키지! 최대 54% S..</a>
                            </p>
                            <p class="date">2013-11-11</p>
                        </li>
                                                    <li>
                            <p class="type">중개사</p>
                            <p class="subject">
                                <a href="http://land.pass.com/bbs/zboard.php?id=notice&page=1&sn1=&divpage=1&sn=off&ss=on&sc=on&select_arrange=headnum&desc=asc&no=161&bbs_no=&no=161" target="_blank">[중개사 합격설명회]11/30일(토) 오후1시!</a>
                            </p>
                            <p class="date">2013-11-23</p>
                        </li>
                                                    <li>
                            <p class="type">중개사</p>
                            <p class="subject">
                                <a href="http://land.pass.com/bbs/zboard.php?id=notice&no=151" target="_blank">제24회 공인중개사 합격자 발표 및 자격증 교부일정..</a>
                            </p>
                            <p class="date">2013-11-03</p>
                        </li>
                                                    <li>
                            <p class="type">공무원</p>
                            <p class="subject">
                                <a href="http://gosi.pass.com/html/mmove.htm?id=class_intro_new&regi_mode=17&smode=1&keywd=1112_passcomgongzi_seoulinterview&logger_kw=1112_passcomgongzi_seoulinterview&source=logger_kw" target="_blank">[영어면접반] 서울시 영어면접 집중관리반!</a>
                            </p>
                            <p class="date">2013-11-12</p>
                        </li>
                                                    <li>
                            <p class="type">공무원</p>
                            <p class="subject">
                                <a href="http://egosi.pass.com/site/?c=event_20130417&cate=event_20130417&_C_=3141" target="_blank">공무원 명품인강 무료체험 이벤트! 인강 50% 할인..</a>
                            </p>
                            <p class="date">2013-11-11</p>
                        </li>
                                                    <li>
                            <p class="type">금융</p>
                            <p class="subject">
                                <a href="http://fn.pass.com/bbs/board.php?id=notice&no=163&lnb=6&_C_=3367" target="_blank">[최대 41만원 할인] AFPK / CFP 공동구매..</a>
                            </p>
                            <p class="date">2013-11-22</p>
                        </li>
                                                    <li>
                            <p class="type">중개사</p>
                            <p class="subject">
                                <a href="http://land.pass.com/bbs/zboard.php?id=notice&page=1&sn1=&divpage=1&sn=off&ss=on&sc=on&select_arrange=headnum&desc=asc&no=158&bbs_no=&no=158" target="_blank">[전격출간] 2014 해커스 공인중개사 입문서시리즈..</a>
                            </p>
                            <p class="date">2013-11-11</p>
                        </li>
                	        
    	        
        
        </ul>
    </div>
    <!--//notice-->
    <!--book-->
    <div class="book">
        <h3><img src="/img/integrate/h3_book.gif" alt="해커스 패스닷컴 교재" /></h3>
        <ul id="book_tab">
                    	<li><a href="#"><img src="/img/integrate/dot_on.gif"></a></li>
                    	<li><a href="#"><img src="/img/integrate/dot_off.gif"></a></li>
                    	<li><a href="#"><img src="/img/integrate/dot_off.gif"></a></li>
                    </ul>
        <ul id="book_banner">
                        <li >
                <a href="http://gosi.pass.com/html/mmove.htm?id=textbook_2013_event&keywd=0913_passcommainbook_2014book&logger_kw=0913_passcommainbook_2014book&source=logger_kw" target="_blank">
                    <img src="http://fn.pass.com//zfiles/banner_img/20131024150000.jpg">
                </a>
            </li>
                        <li style="display:none;">
                <a href="http://fn.pass.com/bbs/board.php?id=notice&no=114&lnb=6" target="_blank">
                    <img src="http://fn.pass.com//zfiles/banner_img/20130816143315.gif">
                </a>
            </li>
                        <li style="display:none;">
                <a href="http://land.pass.com/site/?st=teacher_info&idx=302&type=1&_C_=3299" target="_blank">
                    <img src="http://fn.pass.com//zfiles/banner_img/20131119150424.jpg">
                </a>
            </li>
                    </ul>
    </div>
    <!--//book-->
    <div class="clear"></div>
</div>
		</div>
		<!--//팝업-->
			</div>
	<!-- / container 끝 -->
	

<div class="underBlank"></div>
<div id="footer">
	<div style="width:100%; height:70px; overflow:hidden; position:relative; text-align:center; margin-bottom:20px" >
			
	 

		<!-- 배너 121002 추가 -->
		<script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
		<script type='text/javascript'>var $j = jQuery.noConflict();</script>
		<script type="text/javascript" src="/js/jcarousellite_1.0.1.js"></script>
		<style type="text/css">

		body {margin:0; padding:0; font:12px dotum; color:#666; *text-align:center;}
		body,p,h1,h2,h3,h4,h5,h6,ul,ol,li,dl,dt,dd,table,th,td,form,fieldset,legend,input,textarea,button,menu,section,article, a, select, input{margin:0; padding:0; font-size:12px; font-family:dotum; color:#666}
		img,fieldset {border:0;}
		img {vertical-align:top}
		li,dt,dd {list-style:none;}
		a {color:#666; text-decoration:none; cursor:pointer;}

		.f_banner {width:100%; height:67px; position:relative;}
		.f_banner .fbtn_left {float:left; }
		.f_banner .fbtn_right {position:absolute; top:0; right:3px; z-index:999}

		.f_banner .fbanner_list {width:968px; height:67px; overflow:hidden; float:left}
		.f_banner ul {width:968px;}
		.f_banner ul li {width:138px; height:67px; float:left; display:inline-block; }

		</style>
				<div class="f_banner" id="bannerbar">
			<a  href="#" class="fbtn_left" ><img src="http://www.pass.com/img/common/btn_fsite_left.gif" id="fbtn_left" ></a>
			<div class="fbanner_list" id="fbanner_list">
				<ul>
					<li><a href="http://www.champstudy.com" title="챔프스터디" target="_blank" ><img src="http://www.pass.com/img/common/fsmenu_01.gif" alt="챔프스터디" ></a></li>
					<li><a href="http://start.champstudy.com" title="기초영어 전문관" target="_blank" ><img src="http://www.pass.com/img/common/fsmenu_12.gif" alt="기초영어 전문관" ></a></li>
					<li><a href="http://www.hackers.co.kr/" title="해커스영어" target="_blank" ><img src="http://www.pass.com/img/common/fsmenu_02.gif" alt="해커스영어" ></a></li>
					<li><a href="http://www.gohackers.com" title="고우해커스" target="_blank" ><img src="http://www.pass.com/img/common/fsmenu_03.gif" alt="고우해커스" ></a></li>
					<li><a href="http://www.hackersuhak.com/" title="해커스유학" target="_blank" ><img src="http://www.pass.com/img/common/fsmenu_18.gif" alt="해커스유학" ></a></li>
					<li><a href="http://www.hackers.ac" title="해커스어학원" target="_blank" ><img src="http://www.pass.com/img/common/fsmenu_04.gif" alt="해커스어학원" ></a></li>
					<li><a href="http://www.hackerspass.com" title="해커스패스 공무원" target="_blank" ><img src="http://www.pass.com/img/common/fsmenu_05.gif" alt="해커스패스 공무원" ></a></li>
					<li><a href="http://egosi.pass.com" title="해커스패스 공무원 동영상" target="_blank" ><img src="http://www.pass.com/img/common/fsmenu_06.gif" alt="해커스패스 공무원 동영상" ></a></li>
					<li><a href="http://police.pass.com" title="경찰공무원" target="_blank" ><img src="http://www.pass.com/img/common/fsmenu_15.gif" alt="경찰공무원" ></a></li>
					<li><a href="http://epolice.pass.com" title="경찰공무원 동영상" target="_blank" ><img src="http://www.pass.com/img/common/fsmenu_16.gif" alt="경찰공무원 동영상" ></a></li>
					<li><a href="http://www.hackersjob.com" title="해커스잡" target="_blank" ><img src="http://www.pass.com/img/common/fsmenu_07.gif" alt="해커스잡" ></a></li>
					<li><a href="http://fn.pass.com" title="해커스 패스닷컴 금융" target="_blank" ><img src="http://www.pass.com/img/common/fsmenu_08.gif" alt="해커스 패스닷컴 금융" ></a></li>
					<li><a href="http://land.pass.com" title="해커스 패스닷컴 공인중개사ㆍ행정사" target="_blank" ><img src="http://www.pass.com/img/common/fsmenu_12.jpg" alt="해커스 패스닷컴 공인중개사ㆍ행정사" ></a></li>
					<li><a href="http://eland.pass.com" title="해커스 패스닷컴 공인중개사ㆍ행정사 동영상" target="_blank" ><img src="http://www.pass.com/img/common/fsmenu_12_1.jpg" alt="해커스 패스닷컴 공인중개사ㆍ행정사 동영상" ></a></li>
					<li><a href="http://www.jumphackers.com" title="점프해커스" target="_blank" ><img src="http://www.pass.com/img/common/fsmenu_09.gif" alt="점프해커스" ></a></li>
					<li><a href="http://www.hackers.com" title="해커스닷컴" target="_blank" ><img src="http://www.pass.com/img/common/fsmenu_10.gif" alt="해커스닷컴" ></a></li>
					<li><a href="http://recruit.hackers.com" title="해커스채용" target="_blank" ><img src="http://www.pass.com/img/common/fsmenu_11.gif" alt="해커스채용" ></a></li>
				</ul>
			</div>
			<a  href="#" class="fbtn_right" ><img src="http://www.pass.com/img/common/btn_fsite_right.gif" id="fbtn_right" ></a>
		</div>
				

		<!-- // 배너 120928 추가 끝 -->

		<SCRIPT LANGUAGE="JavaScript">

		$j("#fbanner_list").jCarouselLite({

			btnNext: "#fbtn_left",
			btnPrev: "#fbtn_right",
			visible: 7,			// 노출수
			start: 0,
			auto:3000,
			speed:1000
			/*
			//circular: false, 순환
			//scroll: 2, 이동갯수
			//mouseWheel: true,
			//vertical: true
		   // btnGo: [".1", ".2", ".3", ".4"]
		*/
		});

		</SCRIPT>


	</div>


	<p class="logo_footer">
		<img src="/img/integrate/logo_footer.gif" alt="해커스패스" />
		<a href="http://www.hackers.co.kr/Html/S_Toeic/index.html?id=B_TOEIC_QA&no=469515" target="_blank" class="emblem" ><img src="/img/integrate/btm_emblem.gif" alt="브랜드대상" /></a>
	</p>
	<div class="under_menu">
		<div class="copyright">
			<div class="policy">
				<a href="/?st=terms">이용약관</a>
				<span class="bar" >|</span>
				<a href="/?st=privacy"><strong>개인정보취급방침</strong></a>
			</div>
			<address>
			(주)챔프스터디 l 대표이사 : 전재윤 l 개인정보관리책임자 : 김병철 <br />
			서울특별시 서초구 서초동 1316-15 현대성우빌딩 203호 | TEL : 공무원 학원 (02)566-5800 <br />
			패스닷컴 : 사업자등록번호 220-85-37767 | 통신판매업신고 (제2012-서울강남-01704호)&nbsp;<a href="http://www.ftc.go.kr/info/bizinfo/communicationView.jsp?apv_perm_no=2012322016230201704&area1=&area2=&currpage=1&searchKey=01&searchVal=패스닷컴&stdate=&enddate=" target="_blank">정보조회</a>
			</address>
			<span class="copy">COPYRIGHT ⓒ 2012 HACKERSPASS ALL RIGHTS RESERVED</span>
						
		</div>

	</div>

</div>
</div>
	<!--팝업 : 로그인-->
	<div id="boxes" >
		<div id="dialog" class="window" >
			<div class="popup_login">
			<form method="post" name="" action="./login.php" onsubmit>
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
</body>
</html>