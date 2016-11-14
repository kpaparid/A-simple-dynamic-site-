
function quiz(){
var totalQuestions = $('.questions').size();
$questions = $('.questions');
thisAnswer=1;
do{
var currentQuestion = Math.floor(Math.random() * 10) ;
var ck=checkCookie(currentQuestion);

}while(ck);
setCookie(currentQuestion.toString(), currentQuestion, 365);
newRound();
$($questions.get(currentQuestion)).show("1000");

$("input").change(function(){
thisAnswer = $(this).val();
});

//attach a click listener to the HTML element with the id of 'next'
$('#Submit').click(function () {

if(thisAnswer==1){
$questions.hide();
$("#false").hide();
$("#correct").show(1000);
$("#Submit").hide();
$("#next").show();
$("#next").click(function(){
			$('.option').attr('checked', false)
			location.reload();
        	});
}
    else{
    	$("#false").show();
	}

});
    }
function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname+"="+cvalue+"; "+expires;
}
function delete_cookie( name ) {
  document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}
function checkCookie(name) {
    var username=getCookie(name);
    
    if (username!="") {
        s=true;
          }else{
       s=false;
    }
    return s;
}
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
}
function newRound(){
var foo=new Array(5);
	for (var i = 0; i < 10; i++)
	{
	foo[i]=checkCookie(i)
		}
	var count=0;
	for (var i = 0; i < 10; i++)
	{
	if(foo[i]==true){
			
			count++;
			}
	}
	if(count==10)
	{
		for (var i = 0; i < 10; i++)
		{
			delete_cookie(i);
		}
	}

}
$(document).ready(function(){
$("#next").hide();
$("#correct").hide();
$("#false").hide();
$(".questions").hide();
newRound();
quiz();
}
);



