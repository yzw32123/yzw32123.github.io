<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:95:"/www/wwwroot/yanyanyang/www.lingdayun.com/public/../application/admin/view/teach/video_add.html";i:1673318231;}*/ ?>
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
                
                <form action="/index.php/admin/teach/video_add_post" method="post" class="row" enctype="multipart/form-data">
					<div class="form-group col-md-12">
					  <label for="title">视频标题</label>
					  <input type="text" class="form-control" id="video_name" name="video_name" value="" placeholder="请输入视频标题" />
					</div>
					<div class="form-group col-md-12">
					  <label for="title">视频截图</label>
					  <input type="file" class="form-control" id="video_pic" name="video_pic" value="" placeholder="请输入年级" />
					</div>
					<div class="form-group col-md-12">
					  <label for="title">视频来源</label>
					<div class="form-controls">
					  <select class="form-control" id="video_laiyuan" name="video_laiyuan">
						  <option>请选择</option>
						
							
							<option value="1">bilibili</option>
							<option value="2">自录</option>
							<option value="3">音频自录</option>
					   
					  </select>
					</div>
					  
					</div>
					<div class="form-group col-md-12">
					  <label for="title">教师</label>
					<div class="form-controls">
					  <select class="form-control" id="teacher_id" name="teacher_id">
						  <option>请选择</option>
													<?php if(is_array($teacher) || $teacher instanceof \think\Collection || $teacher instanceof \think\Paginator): $i = 0; $__LIST__ = $teacher;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
														
														<option value="<?php echo $vo['id']; ?>"><?php echo $vo['teacher_name']; ?></option>
							  <?php endforeach; endif; else: echo "" ;endif; ?>
							</select>
					   
					  </select>
					</div>
					  
					</div>
					<div class="form-group col-md-12" id="lianjie">
					  <label for="title">视频链接</label>
					  <input type="text" class="form-control" id="video_src" name="video_src" value="" placeholder="请输入链接" />
					</div>
					<div class="form-group col-md-12" id="wenjian">
					  <label for="title">音频文件</label>
					  <input type="file" class="form-control" id="video_src" name="yinpin_src" value="" placeholder="请输入链接" />
					</div>
					<div class="form-group col-md-12">
					  <label for="title">课程简介</label>
					  <input type="text" class="form-control" id="course_jianjie" name="course_jianjie" value="" placeholder="请输入课程简介" />
					</div>
					
                  <div class="form-group col-md-12">
                    <label for="type">所属年级</label>	
                    <div class="form-controls">
                      <select class="form-control" id="video_nianji" name="video_nianji">
						  <option>请选择</option>
						<?php if(is_array($nianji) || $nianji instanceof \think\Collection || $nianji instanceof \think\Paginator): $i = 0; $__LIST__ = $nianji;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
							
							<option value="<?php echo $vo['id']; ?>"><?php echo $vo['nianji_cate']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                      </select>
                    </div>
                  </div> 
				  <div class="form-group col-md-12">
				    <label for="type">所属科目</label>	
				    <div class="form-controls">
				      <select  class="form-control" id="video_kemu" name="video_kemu">
						  <option>请选择</option>
				  		<?php if(is_array($kemu) || $kemu instanceof \think\Collection || $kemu instanceof \think\Paginator): $i = 0; $__LIST__ = $kemu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				  			<option value="<?php echo $vo['id']; ?>"><?php echo $vo['kemu_cate']; ?></option>
				        <?php endforeach; endif; else: echo "" ;endif; ?>
				      </select>
				    </div>
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
<script type="text/javascript">
	
	
	
	    $("#video_laiyuan").change(function(){
	    	var ids = $("#video_laiyuan").val();
			if(ids == 3){
				$("#lianjie").hide();
				$("#wenjian").show();
			}else{
				$("#lianjie").show();
				$("#wenjian").hide();
			}
	    })
		 
	

</script>