<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Request;
use think\Paginator;
class Driver extends Controller
{
	//科目
    public function index()
    {
		$list = Db::name('driver')->paginate(5);
		
		// 把分页数据赋值给模板变量list
		$this->assign('list', $list);
		
		// 渲染模板输出
		return $this->fetch();
       return view(); 
    }
	

	//科目编辑提交
	public function shenhe(){
		$data = Request::instance()->param();
		$res = Db::name('driver')->where("id=".$data['id'])->update(['status'=>$data['status']]);
		if($res){
			return json(array('code'=>1));
		}else{
			return json(array('code'=>2));
		}
	}
	//科目删除
	public function kemu_del(){
		$data = Request::instance()->param();
		$res = Db::name('kemu_cate')->where("id=".$data['id'])->delete();
		if($res){
			$this->success("删除成功");
		}else{
			$this->error("删除失败");
		}
	}
	//年级
	public function nianji(){
		$list = Db::name('nianji_cate')->paginate(5);
				
				// 把分页数据赋值给模板变量list
				$this->assign('list', $list);
				
				// 渲染模板输出
				return $this->fetch();
		return view(); 
	}
	//年级添加页码
	public function nianji_add(){
		return view();
	}
	//年级上传添加
	public function nianji_add_post(){
		$data = Request::instance()->param();
		$res = Db::name('nianji_cate')->insert($data);
		if($res){
			$this->success("添加成功");
		}else{
			$this->error("添加失败");
		}
	}
	
	//年级编辑
	public function nianji_edit(){
		$data = Request::instance()->param();
		$list = Db::name('nianji_cate')->where("id=".$data['id'])->find();
		$this->assign('list', $list);
		return view();
	}
	//年级编辑提交
	public function nianji_edit_post(){
		$data = Request::instance()->param();
		$res = Db::name('nianji_cate')->where("id=".$data['id'])->update($data);
		if($res){
			$this->success("修改成功");
		}else{
			$this->error("修改失败");
		}
	}
	//年级删除
	public function nianji_del(){
		$data = Request::instance()->param();
		$res = Db::name('nianji_cate')->where("id=".$data['id'])->delete();
		if($res){
			$this->success("删除成功");
		}else{
			$this->error("删除失败");
		}
	}
	//教学视频上传
	public function video(){
	 	$list = Db::name('video')
				->alias('a')
				->join('kemu_cate b', 'a.video_kemu = b.id')
				->join('nianji_cate c', 'a.video_nianji = c.id')
				->join("teacher d",'a.teacher_id = d.id')
				->field('a.*,b.kemu_cate,c.nianji_cate,d.teacher_name')
				->paginate(5);
				
				// 把分页数据赋值给模板变量list
				$this->assign('list', $list);
				
				// 渲染模板输出
				return $this->fetch(); 
		return view(); 
	}
	//教学视频上传
	public function video_add(){
		//科目
		$teacher = Db::name("teacher")->select();
		$sub = Db::name("kemu_cate")->select();
		$nj = Db::name("nianji_cate")->select();
		$this->assign('kemu', $sub);
		$this->assign('teacher', $teacher);
		$this->assign("nianji",$nj);
		// 渲染模板输出
		return $this->fetch();
		return view();
	}
	//视频上传
	public function video_add_post(){
		$data = Request::instance()->param();
		 /* echo "<pre>";
		print_r($data);die; */
		  $file = request()->file('video_pic');
		   $file1 = request()->file('yinpin_src');
		    // 移动到框架应用根目录/static/uploads/ 目录下
		    $info = $file->move(ROOT_PATH . 'public' . DS . 'static'. DS . 'uploads');
			 $info1 = $file1->move(ROOT_PATH . 'public' . DS . 'static'. DS . 'uploads');
			 if($data['video_laiyuan'] == 3){
				 $res = Db::name("video")->insert([
				 	'video_name'=>$data['video_name'],
				 	'video_src'=>$info1->getSaveName(),
				 	'video_pic'=>$info->getSaveName(),
				 	'video_kemu'=>$data['video_kemu'],
				 	'video_nianji'=>$data['video_nianji'],
				 	'video_laiyuan'=>$data['video_laiyuan'],
				 	'course_jianjie'=>$data['course_jianjie'],
				 	'teacher_id'=>$data['teacher_id']
				 ]);
			 }else{
				 $res = Db::name("video")->insert([
				 	'video_name'=>$data['video_name'],
				 	'video_src'=>$data['video_src'],
				 	'video_pic'=>$info->getSaveName(),
				 	'video_kemu'=>$data['video_kemu'],
				 	'video_nianji'=>$data['video_nianji'],
				 	'video_laiyuan'=>$data['video_laiyuan'],
				 	'course_jianjie'=>$data['course_jianjie'],
				 	'teacher_id'=>$data['teacher_id']
				 ]);
			 }
		/* echo "<pre>";
		print_r($res);die; */
			if($res){
					$this->success("添加成功");
				}else{
					$this->error("添加失败");
				}
	}
	//资料ppt word上传
	public function ziliao(){
		$list = Db::name('ziliao')
				->alias('a')
				->join('kemu_cate b', 'a.kemu_id = b.id')
				->join('nianji_cate c', 'a.nianji_id = c.id')
				->join("teacher d",'a.teacher_id = d.id')
				->field('a.*,b.kemu_cate,c.nianji_cate,d.teacher_name')
				->paginate(5);
				
				// 把分页数据赋值给模板变量list
				$this->assign('list', $list);
				
				// 渲染模板输出
				return $this->fetch(); 
		return view();
	}
	//资料ppt word上传页面
	public function ziliao_add(){
		//科目
		$teacher = Db::name("teacher")->select();
		$sub = Db::name("kemu_cate")->select();
		$nj = Db::name("nianji_cate")->select();
		$this->assign('kemu', $sub);
		$this->assign("nianji",$nj);
		$this->assign("teacher",$teacher);
		// 渲染模板输出
		return $this->fetch();
		return view();
	}
	//资料ppt word上传方法
	public function ziliao_add_post(){
		$data = Request::instance()->param();
		  $file = request()->file('ziliao_src');
		    // 移动到框架应用根目录/static/uploads/ 目录下
		    $info = $file->move(ROOT_PATH . 'public' . DS . 'static'. DS . 'uploads');
			$res = Db::name("ziliao")->insert([
				'ziliao_name'=>$data['ziliao_name'],
				'status'=>$data['status'],
				'ziliao_src'=>$info->getSaveName(),
				'kemu_id'=>$data['kemu_id'],
				'nianji_id'=>$data['nianji_id'],
				'teacher_id'=>$data['teacher_id']
			]);
			if($res){
					$this->success("添加成功");
				}else{
					$this->error("添加失败");
				}
	}
	
	
	
	//年级
	public function teacher_list(){
		$list = Db::name('teacher')->paginate(5);
				
				// 把分页数据赋值给模板变量list
				$this->assign('list', $list);
				
				// 渲染模板输出
				return $this->fetch();
		return view(); 
	}
	//教师管理添加页码
	public function teacher_add(){
		return view();
	}
	//教师管理上传添加
	public function teacher_add_post(){
		$data = Request::instance()->param();
		$res = Db::name('teacher')->insert($data);
		if($res){
			$this->success("添加成功");
		}else{
			$this->error("添加失败");
		}
	}
	
	//教师管理编辑
	public function teacher_edit(){
		$data = Request::instance()->param();
		$list = Db::name('teacher')->where("id=".$data['id'])->find();
		$this->assign('list', $list);
		return view();
	}
	//教师管理编辑提交
	public function teacher_edit_post(){
		$data = Request::instance()->param();
		$res = Db::name('teacher')->where("id=".$data['id'])->update($data);
		if($res){
			$this->success("修改成功");
		}else{
			$this->error("修改失败");
		}
	}
	//年级删除
	public function teacher_del(){
		$data = Request::instance()->param();
		$res = Db::name('teacher')->where("id=".$data['id'])->delete();
		if($res){
			$this->success("删除成功");
		}else{
			$this->error("删除失败");
		}
	}
}
