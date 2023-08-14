<?php
namespace app\api\controller;
use think\Controller;
use think\Db;
use think\Request;
class Weishi extends Controller
{
	//查询是否登录
	public function check_login(){
		$user = session("weishi_user");
		if(empty($user)){
			return json(array('code'=>2));
		}else{
			return json(array('code'=>1,'data'=>session("weishi_user")));
		}
	}
	

	
	//微信登录
	public function wxLogin(){
	        //appId
	        $appId = 'wx9e1653b27a4c2af7';
	        // 回调的url
	        $redirect_uri = urlencode('http://www.lingdayun.com/index.php/Api/Weishi/getUserInfo');
	        //跳转微信回调到redirect_uri获取code
	        $url ="https://open.weixin.qq.com/connect/oauth2/authorize?appid=$appId&redirect_uri=$redirect_uri&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect";
			//$this->sendRequest($url);
	        echo "<script>location.href='$url';</script>";
			//return "<script>location.href='$url';</script>";
	    }
	    public function getUserInfo(){
	        //获取code
	        $code = $_GET["code"];
	        // appId与appSecret
	        $appId = 'wx9e1653b27a4c2af7';
	        $appSecret = '80a7fa8f4180eccb4963d5e49d91b0dc';
	        $url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=$appId&secret=$appSecret&code=$code&grant_type=authorization_code";
	        $res = $this->sendRequest($url);
	       // var_dump($res);
	        $access_token = $res["access_token"];
	        $openId  = $res['openid'];
	        $getUserInfo = "https://api.weixin.qq.com/sns/userinfo?access_token=$access_token&openid=$openId&lang=zh_CN";
	        //得到用户信息
	        $user_info = $this->sendRequest($getUserInfo);
			$where = array();
			$where['openid'] =$openId; 
			//dump($user_info);
	        $is_openid = Db::name('weishi_user')->where($where)->find();
			if($is_openid){
				//echo 111;die;
				$user = Db::name('weishi_user')->where($where)->find();
				session("weishi_user",$user);
				echo "<script>location.href='/weishinew/my.html';</script>";
				//return json(array('code'=>1,'data'=>$user));
				
			}else{
				//echo 222;die;
				$data = Db::name('weishi_user')->insert([
					'openid'=>$user_info['openid'],
					'nickname'=>$user_info['nickname'],
					'sex'=>$user_info['sex'],
					'headimg'=>$user_info['headimgurl']
					]);
					if($data){
						$users = [
					'openid'=>$user_info['openid'],
					'nickname'=>$user_info['nickname'],
					'sex'=>$user_info['sex'],
					'headimg'=>$user_info['headimgurl']
					];
					//return json(array('code'=>1,'data'=>$users));
					 echo "<script>location.href='/weishinew/my.html';</script>";
						session("weishi_user",$users);
					}else{
						 echo "<script>layer.msg('登录失败')</script>";
						//$this->error('登录失败,请重新登录');
						//return json(array('code'=>2));
					}
			}
	        //接下来的逻辑...
	    }
	    //发送请求
	    public function sendRequest($url){
	        $ch = curl_init();
	        curl_setopt($ch, CURLOPT_URL, $url);
	        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	        $output = curl_exec($ch);
	        curl_close($ch);
	        return json_decode($output, true);
	    }
		//绑定学校接口
		public function bind_school(){
			$user = session("weishi_user");
			$data = Request::instance()->param();
			//var_dump($data['shool_name']);die;
			if(empty($user)){
				return json(array('code'=>3,'msg'=>'登录失效请重新登录'));
			}else{
				$where['openid'] =$user['openid'];
				$res = Db::name("weishi_user")->where($where)->update([
				
					'school_name'=>$data['school_name'],
					'school_nianji'=>$data['school_nianji'],
					'phone'=>$data['phone'],
				]);
				
				if($res){
					
					return json(array("code"=>1,'msg'=>'认证成功'));
					
					
				}else{
					return json(array("code"=>2,'msg'=>'认证失败'));
				}
			}
		}
		//精讲名师
		public function mingshi(){
			$user = session("weishi_user");
			$data = Db::name('teacher')
		
			->where("is_mingshi=1")
			->select();
			/* foreach($data as $key =>$value){
				$where = array('openid'=>$user['openid']);
				$shifou = Db::name("weishi_shoucang")->where($where)->select();
				//print_r($shifou);
				foreach($shifou as $key1 =>$value1){
					echo $value1['teacher_id'] .'--'.$value['id']."<br>";
					if($value1['teacher_id'] == $value['id']){
						
						$data[$key]['is_shoucang'] = 1;
					}else{
						$data[$key]['is_shoucang'] = 0;
					}
				}
				
				
			}
			 echo "<pre>";
			print_r($data);die; */
			if($data){
				return json(array('code'=>1,'msg'=>$data));
			}else{
				return json(array('code'=>2));
			}
		}
		//收藏
		public function add_shoucang(){
			$user = session("weishi_user");
			$data = Request::instance()->param();
			 if(empty($user)){
				return json(array('code'=>3,'msg'=>'登录失效请重新登录'));
				//return alert_error('登录失效请重新登录');
			}else{ 
				$where = array("openid"=>$user['openid'],"teacher_id"=>$data['teacher_id']);
				 $is = Db::name("weishi_shoucang")->where($where)->find();
				 if($is){
					 return json(array('code'=>4,'msg'=>'您已订阅该老师'));
				 }else{
					 $res = Db::name("weishi_shoucang")->insert([
					 	'teacher_id'=>$data['teacher_id'],
					 	'openid'=>$user['openid'],
					 	'create_time'=>time(),
					 ]);
				 }
				
				
				if($res){
					
					return json(array("code"=>1,'msg'=>'订阅成功'));
					
					
				}else{
					return json(array("code"=>2,'msg'=>'订阅失败'));
				}
			 } 
		}
		//我的收藏
		public function my_shoucang(){
			$user = session("weishi_user");
			$where = array("a.openid"=>$user['openid']);
			 $data = Db::name("weishi_shoucang")->alias("a")->join("teacher b","a.teacher_id = b.id")->where($where)->limit(4)->select();
			if($data){
				return json(array('code'=>1,'msg'=>$data));
			}else{
				return json(array('code'=>2));
			}
		}
		//排行榜x修改
		public function paihang_xiugai(){
			$id = Request::instance()->param();
			$user = session("weishi_user");
			if(empty($user)){
				return json(array('code'=>3,'msg'=>'登录失效请重新登录'));
				//return alert_error('登录失效请重新登录');
			}else{
				$where = array("openid"=>$user['openid']);
				$data = Db::name('weishi_user')
				->where($where)
				->find();
				$num = Db::name('weishi_user')->where($where)->update([
				
					'video_num'=>$data['video_num']+1,
					
				]);
				/* if($data){
					return json(array('code'=>1,'msg'=>$data));
				}else{
					return json(array('code'=>2));
				} */
			}
			
			
			
		}
		//排行榜
		public function paihangbang(){
			$user = session("weishi_user");
			$data = Request::instance()->param();
			if(!empty($user)){
				$where = array("openid"=>$user['openid']);
				$ziji =  Db::name('weishi_user')->where($where)->find();
				$quanbu =  Db::name('weishi_user')->order("video_num desc")->select();
				if($quanbu){
					return json(array('code'=>1,'ziji'=>$ziji,'quanbu'=>$quanbu));
				}else{
					return json(array('code'=>2));
				}
			}else{
				return json(array('code'=>3,'msg'=>'登录失效请重新登录'));
			}
		
		}
		function arr2str ($arr)
		{
		    foreach ($arr as $v)
		    {
		        $v = join(",",$v); //可以用implode将一维数组转换为用逗号连接的字符串
		        $temp[] = $v;
		    }
		    $t="";
		    foreach($temp as $v){
		        $t.="".$v.",";
		    }
		    $t=substr($t,0,-1);
		    return $t;
		}
		//我的订阅
		public function dingyue(){
			$id = Request::instance()->param();
			$user = session("weishi_user");
			if(empty($user)){
				return json(array('code'=>3,'msg'=>'登录失效请重新登录'));
				//return alert_error('登录失效请重新登录');
			}else{
				$where = array("openid"=>$user['openid']);
				$t_id = Db::name('weishi_shoucang')
				->where($where)
				->field("teacher_id")
				->select();
				$t_ids = $this->arr2str($t_id);
				 //var_dump($t_ids) ;die; 
				
				$wheres = array();
				$wheres['a.teacher_id'] = array('in',$t_ids);
				if($t_id){
					$course = Db::name("video")->alias('a')->where($wheres)->join('teacher d', 'a.teacher_id = d.id')->join('kemu_cate b', 'a.video_kemu = b.id')
		->join('nianji_cate c', 'a.video_nianji = c.id')
		->field('a.*,d.teacher_name,b.kemu_cate,c.nianji_cate')->select();
					//var_dump($course);die;
					if($course){
						return json(array('code'=>1,'msg'=>$course));
					}else{
						return json(array('code'=>2));
					}
				}else{
					return json(array('code'=>3,'msg'=>'您没有订阅'));
				}
				/* if($data){
					return json(array('code'=>1,'msg'=>$data));
				}else{
					return json(array('code'=>2));
				} */
			}
		}
		
		//意见反馈
		public function feedback(){
			$id = Request::instance()->param();
			$user = session("weishi_user");
			if(empty($user)){
				return json(array('code'=>3,'msg'=>'登录失效请重新登录'));
				//return alert_error('登录失效请重新登录');
			}else{
				$course = Db::name("feedback")->insert([
					'openid'=>$user['openid'],
					'feedback'=>$id['feedback'],
					'create_time'=>time()
				
				]);
					//var_dump($course);die;
					if($course){
						return json(array('code'=>1,'msg'=>'反馈成功'));
					}else{
						return json(array('code'=>2,'msg'=>'反馈失败'));
					}
				}
				/* if($data){
					return json(array('code'=>1,'msg'=>$data));
				}else{
					return json(array('code'=>2));
				} */
			
		}
		//常见问题
		public function answer(){
			$data = Request::instance()->param();
			if(!empty($data['id'])){
				$res = Db::name("answer")->where("id=".$data['id'])->find();
				if($res){
					return json(array('code'=>1,'msg'=>$res));
				}else{
					return json(array('code'=>2,'msg'=>'获取失败'));
				}
			}else{
				$res = Db::name("answer")->select();
				if($res){
					return json(array('code'=>1,'msg'=>$res));
				}else{
					return json(array('code'=>2,'msg'=>'暂无问题'));
				}
			}
		}
		//全部教师
		public function teacher(){
			$user = session("weishi_user");
			$data = Db::name('teacher')
					
			->select();
			if($data){
				return json(array('code'=>1,'msg'=>$data));
			}else{
				return json(array('code'=>2));
			}
			
		}
}
