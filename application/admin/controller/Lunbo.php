<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Request;
use think\Paginator;
class Lunbo extends Controller
{
	//科目
    public function index()
    {
		$list = Db::name('lunbo')->paginate(5);
		
		// 把分页数据赋值给模板变量list
		$this->assign('list', $list);
		
		// 渲染模板输出
		return $this->fetch();
       return view(); 
    }
	
	//科目编辑
	public function edit(){
		$data = Request::instance()->param();
		$list = Db::name('lunbo')->where("id=".$data['id'])->find();
		$this->assign('list', $list);
		return view();
	}
	//科目编辑提交
	public function edit_post(){
		$data = Request::instance()->param();
		$res = Db::name('lunbo')->where("id=".$data['id'])->update($data);
		if($res){
			$this->success("修改成功");
		}else{
			$this->error("修改失败");
		}
	}
	//科目删除
	public function del(){
		$data = Request::instance()->param();
		$res = Db::name('lunbo')->where("id=".$data['id'])->delete();
		if($res){
			$this->success("删除成功");
		}else{
			$this->error("删除失败");
		}
	}
	
	
	
	//教学视频上传
	public function add(){
		
		// 渲染模板输出
		return $this->fetch();
		return view();
	}
	//轮播上传
	public function add_post(){
		$data = Request::instance()->param();
		  $file = request()->file('url');
		    // 移动到框架应用根目录/static/uploads/ 目录下
		    $info = $file->move(ROOT_PATH . 'public' . DS . 'static'. DS . 'uploads');
			$res = Db::name("lunbo")->insert([
				'name'=>$data['name'],
				'url'=>$info->getSaveName(),
				'status'=>1,
			]);
			if($res){
				//return "<script>lightyear.notify('修改成功，页面即将自动跳转~', 'success', 5000);</script>";
					 $this->success("添加成功"); 
				}else{
					$this->error("添加失败");
				}
	}
	
}
