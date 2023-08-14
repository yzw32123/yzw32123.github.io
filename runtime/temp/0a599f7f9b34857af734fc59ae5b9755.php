<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:97:"/www/wwwroot/yanyanyang/www.lingdayun.com/public/../application/admin/view/teach/teacher_add.html";i:1681537463;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>新增</title>
<link rel="icon" href="favicon.ico" type="image/ico">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="yyy">
<link href="__STATIC__/css/bootstrap.min.css" rel="stylesheet">
<link href="__STATIC__/css/materialdesignicons.min.css" rel="stylesheet">
<!--标签插件-->
<link rel="stylesheet" href="__STATIC__/js/jquery-tags-input/jquery.tagsinput.min.css">
<link href="__STATIC__/css/style.min.css" rel="stylesheet">
</head>
  
<body>
<div class="lyear-layout-web">
  <div class="lyear-layout-container">
    <!--左侧导航-->
   
    <!--End 左侧导航-->
    
    <!--头部信息-->
   
    <!--End 头部信息-->
    
    <!--页面主要内容-->
    <main class="lyear-layout-content">
      
      <div class="container-fluid">
        
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                
                <form action="/index.php/admin/teach/teacher_add_post" method="post" class="row" enctype="multipart/form-data">
                 <!-- <div class="form-group col-md-12">
                    <label for="type">栏目</label>
                    <div class="form-controls">
                      <select name="type" class="form-control" id="type">
                        <option value="1">小说</option>
                        <option value="2">古籍</option>
                        <option value="3">专辑</option>
                        <option value="4">自传</option>
                      </select>
                    </div>
                  </div> -->
                  <div class="form-group col-md-12">
                    <label for="title">教师姓名</label>
                    <input type="text" class="form-control" id="teacher_name" name="teacher_name" value="" placeholder="请输入教师姓名" />
                  </div>
					<div class="form-group col-md-12">
					  <label for="title">任职学校</label>
					  <input type="text" class="form-control" id="school" name="school" value="" placeholder="请输入任职学校" />
					</div>
					<div class="form-group col-md-12">
					  <label for="title">头像</label>
					  <input type="file" class="form-control" id="images" name="images" value="" />
					</div>
					<div class="form-group col-md-12">
					  <label for="title">个人简介</label>
					  <input type="text" class="form-control" id="jianjie" name="jianjie"  />
					</div>
					<div class="form-group col-md-12">
					  <label for="title">名师</label><br>
					  <input type="radio" class="" id="is_mingshi" name="is_mingshi" value="1"  />是
					   <input type="radio" class="" id="is_mingshi" name="is_mingshi"  value="0" />否
					</div>
                  <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-primary ajax-post" target-form="add-form">确 定</button>
                    <button type="button" class="btn btn-default" onclick="javascript:history.back(-1);return false;">返 回</button>
                  </div>
                </form>
       
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
      
    </main>
    <!--End 页面主要内容-->
  </div>
</div>

<script type="text/javascript" src="__STATIC__/js/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/js/bootstrap.min.js"></script>
<script type="text/javascript" src="__STATIC__/js/perfect-scrollbar.min.js"></script>
<!--标签插件-->
<script src="__STATIC__/js/jquery-tags-input/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="__STATIC__/js/main.min.js"></script>
</body>
</html>