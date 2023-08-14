<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Request;

class Login extends Controller
{
    public function index()
    {
        return view();
    }
	public function login_post(){
		$name = Request::instance()->param('name');
		$pass = Request::instance()->param('pass');
		$captcha = Request::instance()->param('captcha');
		//echo $captcha;die;
		$where = [
				'user_login'=>$name
		];
		$data = Db::name('user')->where($where)->find();
		if (!captcha_check($captcha)){
		  $this->error("验证码错误");
		}
		//echo md5($pass);die;
		if($data){
			if(md5($pass) == $data['user_pass']){
			
				 $this->success("登录成功","/index.php/admin/Shouye/index");
				 session('user_id',$data['id']);
				/* $this->redirect(url('admin/index')); */
			}else{
				 $this->error("密码错误");
			}
		}else{
			 $this->error("没有该用户");
		}
	}
}
