<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Controller;
use think\Db;
use think\Request;
class shouye extends Controller
{
	//首页
    public function index()
    {
       return view();
    }
	//首页主题
	public function mains(){
		$data = Db::name('connect')->select();
		$this->assign('list', $data);
		
		// 渲染模板输出
		return $this->fetch();
		return view();
	}
	
}
