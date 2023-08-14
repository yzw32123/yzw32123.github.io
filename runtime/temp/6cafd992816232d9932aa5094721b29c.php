<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:91:"/www/wwwroot/yanyanyang/www.lingdayun.com/public/../application/admin/view/login/index.html";i:1673318230;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>登录页面 - 领达数字科技后台管理系统模板</title>
<link rel="icon" href="__STATIC__/favicon.ico" type="image/ico">
<meta name="keywords" content="邯郸领达数字科技">
<meta name="description" content="邯郸领达数字科技。">
<meta name="author" content="yinqi">
<link href="__STATIC__/css/bootstrap.min.css" rel="stylesheet">
<link href="__STATIC__/css/materialdesignicons.min.css" rel="stylesheet">
<link href="__STATIC__/css/style.min.css" rel="stylesheet">
<style>
body {
    display: -webkit-box;
    display: flex;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
    height: 100%;
}
.login-box {
    display: table;
    table-layout: fixed;
    overflow: hidden;
    max-width: 700px;
}
.login-left {
    display: table-cell;
    position: relative;
    margin-bottom: 0;
    border-width: 0;
    padding: 45px;
}
.login-left .form-group:last-child {
    margin-bottom: 0px;
}
.login-right {
    display: table-cell;
    position: relative;
    margin-bottom: 0;
    border-width: 0;
    padding: 45px;
    width: 50%;
    max-width: 50%;
    background: #67b26f!important;
    background: -moz-linear-gradient(45deg,#67b26f 0,#4ca2cd 100%)!important;
    background: -webkit-linear-gradient(45deg,#67b26f 0,#4ca2cd 100%)!important;
    background: linear-gradient(45deg,#67b26f 0,#4ca2cd 100%)!important;
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#67b26f', endColorstr='#4ca2cd', GradientType=1 )!important;
}
.login-box .has-feedback.feedback-left .form-control {
    padding-left: 38px;
    padding-right: 12px;
}
.login-box .has-feedback.feedback-left .form-control-feedback {
    left: 0;
    right: auto;
    width: 38px;
    height: 38px;
    line-height: 38px;
    z-index: 4;
    color: #dcdcdc;
}
.login-box .has-feedback.feedback-left.row .form-control-feedback {
    left: 15px;
}
@media (max-width: 576px) {
  .login-right {
      display: none;
  }   
}
</style>
</head>
  
<body style="background-image: url(__STATIC__/images/login-bg-2.jpg); background-size: cover;">
<div class="bg-translucent p-10">
	 
  <div class="login-box bg-white clearfix">
	
    <div class="login-left">
		
      <form action="/index.php/admin/Login/login_post" method="post">
		 
        <div class="form-group has-feedback feedback-left">
          <input type="text" placeholder="请输入您的用户名" class="form-control" name="name" id="name" />
          <span class="mdi mdi-account form-control-feedback" aria-hidden="true"></span>
        </div>
        <div class="form-group has-feedback feedback-left">
          <input type="password" placeholder="请输入密码" class="form-control" id="pass" name="pass" />
          <span class="mdi mdi-lock form-control-feedback" aria-hidden="true"></span>
        </div>
        <div class="form-group has-feedback feedback-left row">
          <div class="col-xs-7">
            <input type="text" name="captcha" class="form-control" placeholder="验证码">
            <span class="mdi mdi-check-all form-control-feedback" aria-hidden="true"></span>
          </div>
          <div class="col-xs-5">
            <img class="pull-right" id="captcha" style="cursor: pointer;" onclick="this.src=this.src+'?d='+Math.random();" src="<?php echo captcha_src(); ?>" title="点击刷新" alt="captcha">
          </div>
        </div>
        <div class="form-group">
          <label class="lyear-checkbox checkbox-primary m-t-10">
            <input type="checkbox"><span>5天内自动登录</span>
          </label>
        </div>
        <div class="form-group">
          <button class="btn btn-block btn-primary" type="submit" >立即登录</button>
        </div>
      </form>
    </div>
    <div class="login-right">
      <p><img src="__STATIC__/images/logo2.png" class="m-b-md m-t-xs" alt="logo"></p>
      <p class="text-white m-tb-15">领达数字科技  后台管理系统。</p>
      <p class="text-white">Copyright © 2022 <a href="http://lyear.itshubao.com">领达数字</a>. All right reserved</p>
    </div>
  </div>
</div>
<script type="text/javascript" src="__STATIC__/js/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/js/bootstrap.min.js"></script>
<script type="text/javascript">
;
</script>
</body>
</html>