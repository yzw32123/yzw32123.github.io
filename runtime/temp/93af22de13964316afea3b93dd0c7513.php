<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:91:"/www/wwwroot/yanyanyang/www.lingdayun.com/public/../application/admin/view/index/mains.html";i:1673318230;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>分类列表</title>
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
      
     <div class="container-fluid main_right" >
        
      <div class="row">
        <div class="col-sm-6 col-lg-3">
          <div class="card bg-primary">
            <div class="card-body clearfix">
              <div class="pull-right">
                <p class="h6 text-white m-t-0">今日收入</p>
                <p class="h3 text-white m-b-0 fa-1-5x">102,125.00</p>
              </div>
              <div class="pull-left"> <span class="img-avatar img-avatar-48 bg-translucent"><i class="mdi mdi-currency-cny fa-1-5x"></i></span> </div>
            </div>
          </div>
        </div>
        
        <div class="col-sm-6 col-lg-3">
          <div class="card bg-danger">
            <div class="card-body clearfix">
              <div class="pull-right">
                <p class="h6 text-white m-t-0">用户总数</p>
                <p class="h3 text-white m-b-0 fa-1-5x">920,000</p>
              </div>
              <div class="pull-left"> <span class="img-avatar img-avatar-48 bg-translucent"><i class="mdi mdi-account fa-1-5x"></i></span> </div>
            </div>
          </div>
        </div>
        
        <div class="col-sm-6 col-lg-3">
          <div class="card bg-success">
            <div class="card-body clearfix">
              <div class="pull-right">
                <p class="h6 text-white m-t-0">下载总量</p>
                <p class="h3 text-white m-b-0 fa-1-5x">34,005,000</p>
              </div>
              <div class="pull-left"> <span class="img-avatar img-avatar-48 bg-translucent"><i class="mdi mdi-arrow-down-bold fa-1-5x"></i></span> </div>
            </div>
          </div>
        </div>
        
        <div class="col-sm-6 col-lg-3">
          <div class="card bg-purple">
            <div class="card-body clearfix">
              <div class="pull-right">
                <p class="h6 text-white m-t-0">新增留言</p>
                <p class="h3 text-white m-b-0 fa-1-5x">153 条</p>
              </div>
              <div class="pull-left"> <span class="img-avatar img-avatar-48 bg-translucent"><i class="mdi mdi-comment-outline fa-1-5x"></i></span> </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        
        <div class="col-lg-6"> 
          <div class="card">
            <div class="card-header">
              <h4>每周用户</h4>
            </div>
            <div class="card-body">
              <canvas class="js-chartjs-bars"></canvas>
            </div>
          </div>
        </div>
        
        <div class="col-lg-6"> 
          <div class="card">
            <div class="card-header">
              <h4>交易历史记录</h4>
            </div>
            <div class="card-body">
              <canvas class="js-chartjs-lines"></canvas>
            </div>
          </div>
        </div>
         
      </div>
      
      <div class="row">
        
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h4>用户留言</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>姓名</th>
                      <th>标题</th>
                      <th>邮箱或电话</th>
                      <th>需求</th>
                      <th>提交时间</th>
                    </tr>
                  </thead>
                  <tbody>
					  <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
                    <tr>
                      <td><?php echo $data['id']; ?></td>
                      <td><?php echo $data['name']; ?></td>
					  <td><?php echo $data['title']; ?></td>
                      <td><?php echo $data['phone']; ?></td>
                      <td><?php echo $data['xuqiu']; ?></td>
                      <td><?php echo date('Y-m-d H:i:s',$data['cret_time']); ?></td>
                  
                    </tr>
                  <?php endforeach; endif; else: echo "" ;endif; ?>
                  </tbody>
                </table>
              </div>
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
<!--图表插件-->
<script type="text/javascript" src="__STATIC__/js/Chart.js"></script>
<script type="text/javascript">
$(function(){
	
    $('.search-bar .dropdown-menu a').click(function() {
        var field = $(this).data('field') || '';
        $('#search-field').val(field);
        $('#search-btn').html($(this).text() + ' <span class="caret"></span>');
    });
	var $dashChartBarsCnt  = jQuery( '.js-chartjs-bars' )[0].getContext( '2d' ),
	    $dashChartLinesCnt = jQuery( '.js-chartjs-lines' )[0].getContext( '2d' );
	
	var $dashChartBarsData = {
		labels: ['周一', '周二', '周三', '周四', '周五', '周六', '周日'],
		datasets: [
			{
				label: '注册用户',
	            borderWidth: 1,
	            borderColor: 'rgba(0,0,0,0)',
				backgroundColor: 'rgba(51,202,185,0.5)',
	            hoverBackgroundColor: "rgba(51,202,185,0.7)",
	            hoverBorderColor: "rgba(0,0,0,0)",
				data: [2500, 1500, 1200, 3200, 4800, 3500, 1500]
			}
		]
	};
	var $dashChartLinesData = {
		labels: ['2003', '2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', '2012', '2013', '2014'],
		datasets: [
			{
				label: '交易资金',
				data: [20, 25, 40, 30, 45, 40, 55, 40, 48, 40, 42, 50],
				borderColor: '#358ed7',
				backgroundColor: 'rgba(53, 142, 215, 0.175)',
	            borderWidth: 1,
	            fill: false,
	            lineTension: 0.5
			}
		]
	};
	
	new Chart($dashChartBarsCnt, {
	    type: 'bar',
	    data: $dashChartBarsData
	});
	
	var myLineChart = new Chart($dashChartLinesCnt, {
	    type: 'line',
	    data: $dashChartLinesData,
	});
	
});
</script>
</body>
</html>