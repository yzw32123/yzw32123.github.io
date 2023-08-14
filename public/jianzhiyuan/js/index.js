//登录框

$("#login").click(function(){
	$(".login-mask").css("display","block");
})

$(".close").click(function(){
	$(".login-mask").css("display","none");
})

//登录框切换
$(".messageAndId").children("span").eq(0).click(function(){
	$(".messageAndId").children("span").eq(1).removeClass("active");
	$(".messageAndId").children("span").eq(0).addClass("active");
	$("#re-inputs").css("display","none");
	$("#re-input").css("display","block");
});

$(".messageAndId").children("span").eq(1).click(function(){
	$(".messageAndId").children("span").eq(0).removeClass("active");
	$(".messageAndId").children("span").eq(1).addClass("active");
	$("#re-input").css("display","none");
	$("#re-inputs").css("display","block");
});