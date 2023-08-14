<?php
namespace app\api\controller;
use think\Controller;
use think\Db;
use think\Request;
class Base extends Controller
{
	//查询是否登录
	public function check_login(){
		$user = session("shequ_user");
		if(empty($user)){
			return json(array('code'=>2));
		}else{
			return json(array('code'=>1,'data'=>session("shequ_user")));
		}
	}
	
	//微信登录
	public function wxLogin(){
	        //appId
	        $appId = 'wx39e070213bcab175';
	        // 回调的url
	        $redirect_uri = urlencode('http://www.lingdayun.com/index.php/Api/Base/getUserInfo');
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
	        $appId = 'wx39e070213bcab175';
	        $appSecret = 'defc1a664c5047978430da184ae7b4ad';
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
	        $is_openid = Db::name('shequ_user')->where($where)->find();
			if($is_openid){
				$user = Db::name('shequ_user')->where($where)->find();
				session("shequ_user",$user);
				echo "<script>location.href='/html/shequ_wode.html';</script>";
				//return json(array('code'=>1,'data'=>$user));
				
			}else{
				$data = Db::name('shequ_user')->insert([
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
					 echo "<script>location.href='/html/shequ_wode.html';</script>";
						session("shequ_user",$users);
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
		//绑定小区接口
		public function bind_xiaoqu(){
			$user = session("shequ_user");
			$data = Request::instance()->param();
			if(empty($user)){
				return json(array('code'=>3,'msg'=>'登录失效请重新登录'));
			}else{
				$where['openid'] =$user['openid'];
				$res = Db::name("shequ_user")->where($where)->update([
					'province'=>$data['province'],
					'city'=>$data['city'],
					'xian'=>$data['district'],
					'xiangxi_addr'=>$data['xiangxi_addr'],
					'xiaoqu_name'=>$data['xiaoqu_name'],
					'phone'=>$data['phone'],
				]);
				$users = Db::name("shequ_user")->where($where)->find();
				session("shequ_user",$users);
				if($res){
					
					return json(array("code"=>1,'msg'=>'添加成功'));
					
					
				}else{
					return json(array("code"=>2,'msg'=>'添加失败'));
				}
			}
		}
}
