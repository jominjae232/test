function onUserId(){
	$("#userIdBox").css("display","block");
	document.join.userid_search.focus();
}
function onUserSearch(){
	var f = document.join

	if (f.userid_search.value.match(/[^a-zA-Z0-9]/) != null ) {
	  alert("���ڿ� ������ �Է��� �� �ֽ��ϴ�.");
	  f.userid_search.value="";
	  f.userid_search.focus();
	  return;
	}
	if(f.userid_search.value.length < 4 || f.userid_search.value.length > 15){
	  alert("4���̻� 15�� ���Ϸ� �ۼ��ϼž� �մϴ�.");
	  f.userid_search.value="";
	  f.userid_search.focus();
	  return;
	}

	$("#userIdList").load("../member/PopupIdCheck.php?txt="+f.userid_search.value).html()
}
function onUserSelect(){
	f = document.join
	f.uid.value = f.userid_search.value;
	f.id_check.value = "1"
	$("#userIdBox").css("display","none");
	f.userid_search.value="";
	$("#userIdList").html("");
}
function onJoin(){
	var f = document.join;

	if(f.birth1.value=="" || f.birth2.value=="" || f.birth3.value==""){
		alert("������� �������ּ���");
		f.birth1.focus();
		return "a";
	}

	if(f.email.value==""){
		alert("�̸����� �ۼ����ּ���");
		f.email.focus();
		return "a";
	}
	if(f.email_select.value=='write' && f.email_detail.value==''){
		alert("�̸����� �ۼ����ּ���");
		f.email_detail.focus();
		return "a";
	}
	if(f.mobile01.value==""){
		alert("�޴�����ȣ�� �ۼ����ּ���");
		f.mobile01.focus();
		return "a";
	}
	if(f.mobile02.value==""){
		alert("�޴�����ȣ�� �ۼ����ּ���");
		f.mobile02.focus();
		return "a";
	}
		/*
	if(f.tel01.value==""){
		alert("����ȭ��ȣ�� �ۼ����ּ���");
		f.mobile01.focus();
		return "a";
	}
	if(f.tel02.value==""){
		alert("����ȭ��ȣ�� �ۼ����ּ���");
		f.mobile02.focus();
		return "a";
	}
	*/
	if(f.zip01.value==""){
		alert("�����ȣ �˻��� ���ּ���");
		f.zip01.focus();
		return "a";
	}
	if(f.address_detail.value==""){
		alert("������ �ּҸ� �ۼ����ּ���.");
		f.address_detail.focus();
		return "a";
	}
	if(f.email_select.value=="write"){
		if(f.email_detail.value==""){
			alert("���̸����� �ۼ����ּ���");
			f.email_detail.focus();
			return "a";
		}
	}
	//�߰�
	return "b";
	
}
function onEmailChange(e){
	var f = document.join;
	f.email_detail.value="";
	if(e.value == "write"){
		f.email_detail.style.display="";
	}else{
		f.email_detail.style.display="none";
	}
}

//�����ȣ
function onAddressSelect(zip,address){
	var f = document.join;
	f.zip01.value = zip.substr(0,3);
	f.zip02.value = zip.substr(3,3);
	f.address.value = address

	f.address_detail.value = "";
	$("#addressList").html("")
	$("#addressBox").css("display","none")
}

function onAddress(){
	$("#addressBox").css("display","block");
	document.join.address_search.focus();
}
function onAddresstSearch(){
	var f = document.join
	$("#addressList").load("/inc/PopupAddress.php?txt="+f.address_search.value).html()
}
function onPopupClose(s){
	document.getElementById(s).style.display="none";
}
function onNumChk(e){
	if(isNaN(e.value)){
		alert("���ڸ� �Է��ϼ���")
		e.value="";
		return;
	}
}
function onAddressEnter(){
	if(event.keyCode==13 || event.keyCode==10){
		onAddresstSearch()
	}
}
function onFindIdEnter(){
	if(event.keyCode==13 || event.keyCode==10){
		onUserSearch()
	}
}

//���м���
var un = "";
function onUniversitySelect(n,t){
	var f = document.join

	eval("f."+un+"no.value = n")
	eval("f."+un+"txt.value = t")

	f.university_search.value = "";
	$(".universityList").html("")
	$(".universityBox").css("display","none")
}
function onUniversity(e){
	un = e
	$(".universityBox").css("display","block");
	document.join.university_search.focus();
}
function onUniversitySearch(){
	var f = document.join
	$(".universityList").load("/inc/PopupUniversity.php?txt="+f.university_search.value).html()
}

//�а�����
var de = "";
function onDepartmentSelect(n,t){
	var f = document.join
	eval("f."+de+"no.value = n")
	eval("f."+de+"txt.value = t")
	f.department_search.value = "";
	$(".departmentList").html("")
	$(".departmentBox").css("display","none")
}

function onDepartment(e){
	de = e
	$(".departmentBox").css("display","block");
	document.join.department_search.focus();
}
function onDepartmentSearch(){
	var f = document.join
	$(".departmentList").load("/inc/PopupDepartment.php?txt="+f.department_search.value).html()
}
function onJoinAdd(){
	var f = document.join;
	//�߰�
	var unitype_chk=false;
	for(i=0; i < 5; i++){
		if(f.unitype[i].checked){
			unitype_chk = true;
			break
		}
	}
	if(!unitype_chk){
		f.unitype[0].focus();
		alert("������������ �������ּ���.");
		return "a";
	}
	var ji_gaeyol_chk = false;
	for(i=0; i < f.ji_gaeyol.length; i++){
		if(f.ji_gaeyol[i].selected){
			ji_gaeyol_chk = true;
			break;
		}
	}
	
	if(!ji_gaeyol_chk){
		f.ji_gaeyol.focus();
		alert("�����迭�� �������ּ���.");
		return "a";
	}

	var sf_gb_chk=false;
	for(i=0; i < 3; i++){
		if(f.sf_gb[i].checked){
			sf_gb_chk = true;
			break
		}
	}
	if(!sf_gb_chk){
		f.sf_gb[0].focus();
		alert("���Ա����� �������ּ���.");
		return "a";
	}

	if(!f.prev_test[0].checked && !f.prev_test[1].checked){
		f.prev_test[0].focus();
		alert("�������ÿ��θ� üũ���ּ���.")
		return "a";
	}

	var prev_year_chk = false;
	for(i=0; i < f.prev_year.length; i++){
		if(f.prev_year[i].selected){
			prev_year_chk = true;
			break;
		}
	}
	
	if(!prev_year_chk){
		f.prev_year.focus();
		alert("���������� �������ּ���.");
		return "a";
	}
	return "b";
	
}

function onPopupCloseClass(s){
	$("."+s).css("display","none");
}

function onUniverEnter(){
	if(event.keyCode==13 || event.keyCode==10){
		onUniversitySearch()
	}
}
function onDeparEnter(){
	if(event.keyCode==13 || event.keyCode==10){
		onDepartmentSearch()
	}
}

