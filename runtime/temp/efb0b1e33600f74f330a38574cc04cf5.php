<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:96:"/www/wwwroot/yanyanyang/www.lingdayun.com/public/../application/admin/view/teach/ziliao_add.html";i:1682406675;}*/ ?>
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
                
                <form action="/index.php/admin/teach/ziliao_add_post" method="post" class="row" enctype="multipart/form-data">
					<div class="form-group col-md-12">
					  <label for="title">标题</label>
					  <input type="text" class="form-control" id="ziliao_name" name="ziliao_name" value="" placeholder="请输入标题" />
					</div>
					<div class="form-group col-md-12">
					  <label for="title">上传(ppt,word,excel文件)</label>
					  <input type="file" class="form-control" id="ziliao_src" name="ziliao_src" value="" placeholder="请输入年级" />
					</div>
					<div class="form-group col-md-12">
					  <label for="title">是否免费</label>
					  <div class="form-controls">
					    <select class="form-control" id="status" name="status">
					  	  <option>请选择</option>
					  	
					  		
					  		<option value="0">免费</option>
							<option value="1">收费</option>
					      
					    </select>
					  </div>
					</div>
				<div class="form-group col-md-12">
				  <label for="title">出版</label>
				  <div class="form-controls">
				    <select class="form-control" id="ban" name="ban">
				  	  <option>请选择</option>
				  	
				  		
				  		<option value="0">冀教版</option>
						<option value="1">部编版</option>
				      <option value="2">人教版</option>
					  <option value="3">专业课</option>
				    </select>
				  </div>
				</div>
                  <div class="form-group col-md-12">
                    <label for="type">所属年级</label>	
                    <div class="form-controls">
                      <select  class="form-control" id="nianji_id" name="nianji_id">
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
				      <select  class="form-control" id="kemu_id" name="kemu_id">
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