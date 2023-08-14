<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:92:"/www/wwwroot/yanyanyang/www.lingdayun.com/public/../application/admin/view/shouye/index.html";i:1678671634;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>首页 - 领达数字科技后台管理系统 </title>
<link rel="icon" href="__STATIC__/favicon.ico" type="image/ico">
<meta name="keywords" content="领达数字科技">
<meta name="description" content="领达数字科技">
<meta name="author" content="yyy">
<link href="__STATIC__/css/bootstrap.min.css" rel="stylesheet">
<link href="__STATIC__/css/materialdesignicons.min.css" rel="stylesheet">
<link href="__STATIC__/css/style.min.css" rel="stylesheet">
<style type="text/css">
	ul li{
		cursor: pointer;
	}
</style>
</head>
  
<body>
<div class="lyear-layout-web">
  <div class="lyear-layout-container">
    <!--左侧导航-->
    <aside class="lyear-layout-sidebar">
      
      <!-- logo -->
      <div id="logo" class="sidebar-header">
        <a href="index.html">领达数字科技</a>
      </div>
      <div class="lyear-layout-sidebar-scroll"> 
        
        
        <nav class="sidebar-main">
          <ul class="nav nav-drawer main_left">
			  <li class="nav-item active caidan"> <a href="index.html"><i class="mdi mdi-home"></i> 菜单列表</a> </li>
            <li class="nav-item active"> <a href="index.html"><i class="mdi mdi-home"></i> 后台首页</a> </li>
            <li class="nav-item nav-item-has-subnav">
              <a href="javascript:void(0)"><i class="mdi mdi-folder-open"></i> 为师</a>
              <ul class="nav nav-subnav">
				   <li data-src="/index.php/admin/teach/teacher_list"> <a>教师管理列表</a> </li>
                <li data-src="/index.php/admin/teach/video"> <a>教学视频列表</a> </li>
				<li data-src="/index.php/admin/teach/ziliao"> <a>教学资料列表</a></li>
        		 <li data-src="/index.php/admin/teach/kemu"> <a>科目分类列表</a></li>
				  <li data-src="/index.php/admin/teach/nianji"> <a>年级分类列表</a></li>
				   <li data-src="/index.php/admin/teach/feedback"> <a>意见反馈</a></li>
				    <li data-src="/index.php/admin/teach/answer"> <a>常见问题</a></li>
              
              </ul>
            </li>
         
           <li class="nav-item nav-item-has-subnav">
             <a href="javascript:void(0)"><i class="mdi mdi-home-map-marker"></i> 生活社区</a>
             <ul class="nav nav-subnav">
               <li data-src="/index.php/admin/teach/video"> <a>商户信息</a> </li>
           	<li data-src="/index.php/admin/teach/ziliao"> <a>商户订单</a></li>
           	 <li data-src="/index.php/admin/teach/kemu"> <a>商户菜品管理</a></li>
           	  <li data-src="/index.php/admin/teach/nianji"> <a>商户分类管理</a></li>
			   <li data-src="/index.php/admin/driver/index"> <a>司机管理</a></li>
             
             </ul>
           </li>
		   <li class="nav-item nav-item-has-subnav">
		     <a href="javascript:void(0)"><i class="mdi mdi-image-area"></i> 轮播图上传</a>
		     <ul class="nav nav-subnav">
		       <li data-src="/index.php/admin/Lunbo/index"> <a>上传轮播图</a> </li>
		   	<!-- <li data-src="/index.php/admin/teach/ziliao"> <a>商户订单</a></li>
		   	 <li data-src="/index.php/admin/teach/kemu"> <a>商户菜品管理</a></li>
		   	  <li data-src="/index.php/admin/teach/nianji"> <a>商户分类管理</a></li> -->
		     
		     </ul>
		   </li>
          </ul>
        </nav>
        
        <div class="sidebar-footer">
          <p class="copyright">Copyright &copy; 2022. <a target="_blank" href="">领达数字科技</a> All rights reserved.</p>
        </div>
      </div>
      
    </aside>
    <!--End 左侧导航-->
    
    <!--头部信息-->
    <header class="lyear-layout-header">
      
      <nav class="navbar navbar-default">
        <div class="topbar">
          
          <div class="topbar-left">
         <!--   <div class="lyear-aside-toggler" style="color: #FFFFFF;">
              <span class="lyear-toggler-bar"></span>
              <span class="lyear-toggler-bar"></span>
              <span class="lyear-toggler-bar"></span>
            </div> -->
            <span class="">
				<button class="btn btn-label btn-primary"><label><i class="mdi mdi-checkbox-marked-circle-outline"></i></label> 后台首页</button>
				</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  <span class=""><button class="btn btn-label btn-warning"><label><i class="mdi mdi-delete-empty"></i></label> 清除缓存</button></span>
          </div>
          
          <ul class="topbar-right">
            <li class="dropdown dropdown-profile">
              <a href="javascript:void(0)" data-toggle="dropdown">
                <img class="img-avatar img-avatar-48 m-r-10" src="__STATIC__/images/logo41.jpg" alt="领达数字" />
                <span>领达数字 <span class="caret"></span></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-right">
                <li> <a href="lyear_pages_profile.html"><i class="mdi mdi-account"></i> 个人信息</a> </li>
                <li> <a href="lyear_pages_edit_pwd.html"><i class="mdi mdi-lock-outline"></i> 修改密码</a> </li>
                <li> <a href="javascript:void(0)"><i class="mdi mdi-delete"></i> 清空缓存</a></li>
                <li class="divider"></li>
                <li> <a href="lyear_pages_login.html"><i class="mdi mdi-logout-variant"></i> 退出登录</a> </li>
              </ul>
            </li>
            <!--切换主题配色-->
		    <li class="dropdown dropdown-skin">
			  <span data-toggle="dropdown" class="icon-palette"><i class="mdi mdi-palette"></i></span>
			  <ul class="dropdown-menu dropdown-menu-right" data-stopPropagation="true">
                <li class="drop-title"><p>主题</p></li>
                <li class="drop-skin-li clearfix">
                  <span class="inverse">
                    <input type="radio" name="site_theme" value="default" id="site_theme_1" checked>
                    <label for="site_theme_1"></label>
                  </span>
                  <span>
                    <input type="radio" name="site_theme" value="dark" id="site_theme_2">
                    <label for="site_theme_2"></label>
                  </span>
                  <span>
                    <input type="radio" name="site_theme" value="translucent" id="site_theme_3">
                    <label for="site_theme_3"></label>
                  </span>
                </li>
			    <li class="drop-title"><p>LOGO</p></li>
				<li class="drop-skin-li clearfix">
                  <span class="inverse">
                    <input type="radio" name="logo_bg" value="default" id="logo_bg_1" checked>
                    <label for="logo_bg_1"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_2" id="logo_bg_2">
                    <label for="logo_bg_2"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_3" id="logo_bg_3">
                    <label for="logo_bg_3"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_4" id="logo_bg_4">
                    <label for="logo_bg_4"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_5" id="logo_bg_5">
                    <label for="logo_bg_5"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_6" id="logo_bg_6">
                    <label for="logo_bg_6"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_7" id="logo_bg_7">
                    <label for="logo_bg_7"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_8" id="logo_bg_8">
                    <label for="logo_bg_8"></label>
                  </span>
				</li>
				<li class="drop-title"><p>头部</p></li>
				<li class="drop-skin-li clearfix">
                  <span class="inverse">
                    <input type="radio" name="header_bg" value="default" id="header_bg_1" checked>
                    <label for="header_bg_1"></label>                      
                  </span>                                                    
                  <span>                                                     
                    <input type="radio" name="header_bg" value="color_2" id="header_bg_2">
                    <label for="header_bg_2"></label>                      
                  </span>                                                    
                  <span>                                                     
                    <input type="radio" name="header_bg" value="color_3" id="header_bg_3">
                    <label for="header_bg_3"></label>
                  </span>
                  <span>
                    <input type="radio" name="header_bg" value="color_4" id="header_bg_4">
                    <label for="header_bg_4"></label>                      
                  </span>                                                    
                  <span>                                                     
                    <input type="radio" name="header_bg" value="color_5" id="header_bg_5">
                    <label for="header_bg_5"></label>                      
                  </span>                                                    
                  <span>                                                     
                    <input type="radio" name="header_bg" value="color_6" id="header_bg_6">
                    <label for="header_bg_6"></label>                      
                  </span>                                                    
                  <span>                                                     
                    <input type="radio" name="header_bg" value="color_7" id="header_bg_7">
                    <label for="header_bg_7"></label>
                  </span>
                  <span>
                    <input type="radio" name="header_bg" value="color_8" id="header_bg_8">
                    <label for="header_bg_8"></label>
                  </span>
				</li>
				<li class="drop-title"><p>侧边栏</p></li>
				<li class="drop-skin-li clearfix">
                  <span class="inverse">
                    <input type="radio" name="sidebar_bg" value="default" id="sidebar_bg_1" checked>
                    <label for="sidebar_bg_1"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_2" id="sidebar_bg_2">
                    <label for="sidebar_bg_2"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_3" id="sidebar_bg_3">
                    <label for="sidebar_bg_3"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_4" id="sidebar_bg_4">
                    <label for="sidebar_bg_4"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_5" id="sidebar_bg_5">
                    <label for="sidebar_bg_5"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_6" id="sidebar_bg_6">
                    <label for="sidebar_bg_6"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_7" id="sidebar_bg_7">
                    <label for="sidebar_bg_7"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_8" id="sidebar_bg_8">
                    <label for="sidebar_bg_8"></label>
                  </span>
				</li>
			  </ul>
			</li>
            <!--切换主题配色-->
          </ul>
          
        </div>
      </nav>
      
    </header>
    <!--End 头部信息-->
    
    <!--页面主要内容-->
    <!-- <main class="lyear-layout-content">
      
      <div class="container-fluid main_right" > -->
		   <iframe frameborder="0" scrolling="yes" style="width:100%;" src="/index.php/admin/Shouye/mains" id="aa"></iframe>
        <!-- 
        -->
        
     <!-- </div>
      
    </main> -->
    <!--End 页面主要内容-->
  </div>
</div>

<script type="text/javascript" src="__STATIC__/js/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/js/bootstrap.min.js"></script>
<script type="text/javascript" src="__STATIC__/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="__STATIC__/js/main.min.js"></script>

<!--图表插件-->
<script type="text/javascript" src="__STATIC__/js/Chart.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
	$(".main_left li").on("click",function(){
		
	      var address =$(this).attr("data-src");
	   $("iframe").attr("src",address);
	});
	
	$("#aa").load(function(){
	
	　　var mainheight =document.documentElement.clientHeight - 28;
	   
	　　$(this).height(mainheight);
	
	　　});
   
});

 
</script>
</body>
</html>