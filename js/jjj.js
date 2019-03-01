function Fun (a) {
var p;
if (a=='1') {p=document.getElementById('ss1').src;}
if (a=='2') {p=document.getElementById('ss2').src;}
if (a=='3') {p=document.getElementById('ss3').src;}
$("#Main_Photo").attr("src",p);
}


function Test (Stoim) {

var NewStoim=Stoim;



var a1=$("#Kol option:selected").text();

if (a1==2) {
	NewStoim=Stoim;
}
else{	
	if (a1==1) {
		NewStoim=Stoim/2;	
	}
	else{
		NewStoim=Stoim*a1;	
	}
}	

var a2=$("#Kol2 option:selected").text();

if (a2==3) {NewStoim=NewStoim/2;}
if (a2==14) {NewStoim=NewStoim*2;}
if (a2==21) {NewStoim=NewStoim*3;}
if (a2==30) {NewStoim=NewStoim*4;}	


if ($('#qq1').is(':checked')){NewStoim=NewStoim+1000;}
if ($('#qq2').is(':checked')){NewStoim=NewStoim+3000;}
if ($('#qq3').is(':checked')){NewStoim=NewStoim+5000;}

$("#pp").text(NewStoim);

}
















function Empty_Str(id){
var str=document.getElementById(id);	
if (!str.value) {
		document.getElementById(id).focus();
		str.style.border = "2px solid red";
		str.placeholder = 'Поле не должно быть пустым!';
		event.preventDefault();
		return 0;
	}
else{
		str.style.border = "2px solid green";
		return 1;
	}
}





function Emptys_Tel(id,id2){
var str=document.getElementById(id);
var box=$(id2).val().length;

var rep = /[-\.;":'a-zA-Zа-яА-Я]/;
if (rep.test(str.value)) {
		str.value="";
		str.style.border = "2px solid red";
		str.placeholder = 'Наличие букв!';
		event.preventDefault();
		return 0;
}
if (str.value.indexOf("+7")==-1 && str.value.indexOf("8")==-1) {
		document.getElementById(id).focus();
		str.value="";
		str.style.border = "2px solid red";
		str.placeholder = 'Неправильный формат!';
		event.preventDefault();
		return 0;
	}
else{
		if (box!="12"){
			document.getElementById(id).focus();
			str.value="";
			str.style.border = "2px solid red";
			str.placeholder = 'Формат номера +7XXXXXXXXXX';
			event.preventDefault();
			return 0;
		}
		else{
			str.style.border = "2px solid green";
			return 1;
		}
	}
}




function Empty_TextArea(id){
var textarea=document.getElementById(id);
if(textarea.value.length==0){
	document.getElementById(id).focus();
	textarea.style.border = "2px solid red";
	textarea.placeholder = 'Поле не может быть пустым';
		return 0;
	}
else{
	textarea.style.border = "2px solid green";
		return 1;
	}
}






















function ValidAvtoriz() {
	if (Empty_Str("log_avtoriz")=="0"){return false;}
	if (Empty_Str("pas_avtoriz")=="0"){return false;}
	return true;
}


function ValidRegister() {
var str="tel_reg";
var str2="#tel_reg";
	if (Empty_Str("Name_reg")=="0"){return false;}
	if (Empty_Str("log_reg")=="0"){return false;}
	if (Empty_Str("pas_reg")=="0"){return false;}
	if (Emptys_Tel(str,str2)=="0"){return false;}
	return true;
}

function ValidUser() {
var str="Tl";
var str2="#Tl";	
	if (Empty_Str("Nm")=="0"){return false;}
	if (Emptys_Tel(str,str2)=="0"){return false;}
	if (Empty_Str("Ps")=="0"){return false;}	
	return true;
}

function ValidAddBlog() {
	if (Empty_Str("News_zagol")=="0"){return false;}
	if (Empty_TextArea("News_Text")=="0"){return false;}
	return true;
}

function ValidKoment() {
    if (Empty_Str("o1")=="0"){return false;}
    if (Empty_TextArea("o3")=="0"){return false;}
    return true;
}

function ValidBlogCorrect() {
	if (Empty_Str("News_zagol")=="0"){return false;}
	if (Empty_TextArea("News_Text")=="0"){return false;}
	return true;
}

function ValidAddTyr() {
	if (Empty_Str("Tyr_Nazv")=="0"){return false;}
	if (Empty_Str("Tyr_Coin")=="0"){return false;}
	if (Empty_Str("Tyr_Place")=="0"){return false;}
	if (Empty_TextArea("Tyr_Text")=="0"){return false;}
	return true;
}

function ValidCorrTyr() {
	if (Empty_Str("Tyr_Nazv")=="0"){return false;}
	if (Empty_Str("Tyr_Coin")=="0"){return false;}
	if (Empty_Str("Tyr_Count")=="0"){return false;}
	if (Empty_TextArea("Tyr_Text")=="0"){return false;}
	return true;
}