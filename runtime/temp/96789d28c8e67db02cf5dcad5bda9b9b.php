<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"C:\wwwroot\www.lingdayun.com\public/../application/admin\view\driver\index.html";i:1668270489;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>司机列表</title>
<link rel="icon" href="__STATIC__/favicon.ico" type="image/ico">
<meta name="keywords" content="邯郸市领达数字科技">
<meta name="description" content="邯郸市领达数字科技">
<meta name="author" content="yyy">
<link href="__STATIC__/css/bootstrap.min.css" rel="stylesheet">
<link href="__STATIC__/css/materialdesignicons.min.css" rel="stylesheet">
<!--对话框-->
<link rel="stylesheet" href="__STATIC__/js/jconfirm/jquery-confirm.min.css">
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
                <!--  <a class="btn btn-primary m-r-5" href="/index.php/admin/Teach/kemu_add"><i class="mdi mdi-plus"></i> 新增</a> -->
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
						<th>图片</th>
						<th>司机姓名</th>
						<th>出发地</th>
						<th>目的地</th>
						<th>手机号</th>
						<th>车牌照/th>
						<th>费用</th>
						<th>人数</th>
						<th>出发日期</th>
						<th>出发时间</th>
						<th>是否接送</th>
						<th>是否通过</th>  
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
						<td style="width: 5%;"> <img src="/static/uploads/<?php echo $data['img']; ?>" width="100%"/></td>
						<td> <?php echo $data['name']; ?></td>
						<td> <?php echo $data['chufa']; ?></td>
						<td> <?php echo $data['mudi']; ?></td>
						<td> <?php echo $data['phone']; ?></td>
						<td> <?php echo $data['chepai']; ?></td>
						<td> <?php echo $data['free']; ?></td>
						<td> <?php echo $data['number']; ?></td>
						<td> <?php echo $data['chufa_date']; ?></td>
						<td> <?php echo $data['chufa_time']; ?></td>
						<td> 
							  <?php if($data['jiesong'] == 1): ?>
									是
									<?php else: ?>
									否
							<?php endif; ?>
						</td>
                        <td>
                        	  <?php if($data['status'] == 1): ?>
                        			是
                        			<?php else: ?>
                        			否
                        	<?php endif; ?>
                        </td>
                        <td>
                          <div class="btn-group">
                            <a class="btn btn-xs btn-default" onclick="shenhe(<?php echo $data['id']; ?>,<?php echo $data['status']; ?>)"  title="审核" data-toggle="tooltip"><i class="mdi mdi-gradient"></i></a>
                         
                            <a class="btn btn-xs btn-default" href="/index.php/admin/Teach/kemu_del?id=<?php echo $data['id']; ?>" title="删除" data-toggle="tooltip"><i class="mdi mdi-window-close"></i></a>
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
<!--对话框-->
<script src="__STATIC__/js/jconfirm/jquery-confirm.min.js"></script>
<script type="text/javascript" src="__STATIC__/js/main.min.js"></script>
<script type="text/javascript">
$(function(){
    $('.search-bar .dropdown-menu a').click(function() {
        var field = $(this).data('field') || '';
        $('#search-field').val(field);
        $('#search-btn').html($(this).text() + ' <span class="caret"></span>');
    });
	
	$('#shenhe').on('click', function () {
		
	});
});

function shenhe(id,status){
	
		$.confirm({
		    title: '审核',
		    content: '请仔细查看,谨慎操作',
		    buttons: {
		        confirm: {
		            text: '确认',
		            action: function(){
		               // $.alert('确认的!');
					   if(status == 1){
						   var statuss = 2;
					   }else{
						     var statuss = 1;
					   }
					   $.ajax({
					       url:"/index.php/admin/driver/shenhe",
					       dataType:"json",
					       type:"get",
						   data:{
							    'id':id,
								'status':statuss
						   },
					       success:function(json){
					           console.log(json);
					        if(json['code'] == 1){
					        					   						   									
					        					   								$.alert('修改成功!'); 				   										
					        					   							 }else{
					        					   								$.alert('修改失败!'); 
					        					   								 
					        					   							 }
					           
					   
					       }
					   })
		            }
		        },
		        cancel: {
		            text: '关闭',
		            action: function(){
		                $.alert('取消的!');
		            }
		        },
		      
		    }
		});
	}
</script>
</body>
</html>