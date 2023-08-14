<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"C:\wwwroot\www.lingdayun.com\public/../application/admin\view\teach\nianji.html";i:1662017867;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>科目分类列表</title>
<link rel="icon" href="__STATIC__/favicon.ico" type="image/ico">
<meta name="keywords" content="邯郸市领达数字科技">
<meta name="description" content="邯郸市领达数字科技">
<meta name="author" content="yyy">
<link href="__STATIC__/css/bootstrap.min.css" rel="stylesheet">
<link href="__STATIC__/css/materialdesignicons.min.css" rel="stylesheet">
<link href="__STATIC__/css/style.min.css" rel="stylesheet">
</head>
  
<body>
<div class="lyear-layout-web">
  <div class="lyear-layout-container">
    <!--左侧导航-->
   
    <!--End 左侧导航-->
    
    
    <!--End 头部信息-->
    
    <!--页面主要内容-->
    <main class="lyear-layout-content">
      
      <div class="container-fluid">
        
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-toolbar clearfix">
                <form class="pull-right search-bar" method="get" action="#!" role="form">
                  <div class="input-group">
                    <div class="input-group-btn">
                      <input type="hidden" name="search_field" id="search-field" value="title">
                      <button class="btn btn-default dropdown-toggle" id="search-btn" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="false">
                      标题 <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li> <a tabindex="-1" href="javascript:void(0)" data-field="title">标题</a> </li>
                        <li> <a tabindex="-1" href="javascript:void(0)" data-field="cat_name">栏目</a> </li>
                      </ul>
                    </div>
                    <input type="text" class="form-control" value="" name="keyword" placeholder="请输入名称">
                  </div>
                </form>
                <div class="toolbar-btn-action">
                  <a class="btn btn-primary m-r-5" href="/index.php/admin/Teach/nianji_add"><i class="mdi mdi-plus"></i> 新增</a>
                 <!-- <a class="btn btn-success m-r-5" href="#!"><i class="mdi mdi-check"></i> 启用</a>
                  <a class="btn btn-warning m-r-5" href="#!"><i class="mdi mdi-block-helper"></i> 禁用</a>
                  <a class="btn btn-danger" href="#!"><i class="mdi mdi-window-close"></i> 删除</a> -->
                </div>
              </div>
              <div class="card-body">
                
                <div class="table-responsive">
                  <table class="table table-bordered  table-striped">
                    <thead>
						
                      <tr>
                        <th>
                          <label class="lyear-checkbox checkbox-primary">
                            <input type="checkbox" id="check-all"><span></span>
                          </label>
                        </th>
                        <th>编号</th>
                        <th>年级名称</th>
                        
                        <th>操作</th>
                      </tr>
                    </thead>
                    <tbody>
						<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
                      <tr>
                        <td>
                          <label class="lyear-checkbox checkbox-primary">
                            <input type="checkbox" name="ids[]" value="1"><span></span>
                          </label>
                        </td>
                        <td> <?php echo $data['id']; ?></td>
                        <td> <?php echo $data['nianji_cate']; ?></td>
                        
                        <td>
                          <div class="btn-group">
                            <a class="btn btn-xs btn-default" href="/index.php/admin/Teach/nianji_edit?id=<?php echo $data['id']; ?>" title="编辑" data-toggle="tooltip"><i class="mdi mdi-pencil"></i></a>&nbsp;&nbsp;&nbsp;
                            <a class="btn btn-xs btn-default" href="/index.php/admin/Teach/nianji_del?id=<?php echo $data['id']; ?>" title="删除" data-toggle="tooltip"><i class="mdi mdi-window-close"></i></a>
                          </div>
                        </td>
                      </tr>
                     <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                  </table>
                </div>
				<?php echo $list->render(); ?>
               <!-- <ul class="pagination">
                  <li class="disabled"><span>«</span></li>
                  <li class="active"><span>1</span></li>
                  <li><a href="#1">2</a></li>
                  <li><a href="#1">3</a></li>
                  <li><a href="#1">4</a></li>
                  <li><a href="#1">5</a></li>
                  <li><a href="#1">6</a></li>
                  <li><a href="#1">7</a></li>
                  <li><a href="#1">8</a></li>
                  <li class="disabled"><span>...</span></li>
                  <li><a href="#!">14452</a></li>
                  <li><a href="#!">14453</a></li>
                  <li><a href="#!">»</a></li>
                </ul> -->
       
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
<script type="text/javascript" src="__STATIC__/js/main.min.js"></script>
<script type="text/javascript">
$(function(){
    $('.search-bar .dropdown-menu a').click(function() {
        var field = $(this).data('field') || '';
        $('#search-field').val(field);
        $('#search-btn').html($(this).text() + ' <span class="caret"></span>');
    });
});
</script>
</body>
</html>