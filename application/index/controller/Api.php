<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;

class Api extends Controller
{
/* 	public function __construct() {
	
	if ( !isset($_SESSION[‘username‘]) || $_SESSION[‘username‘] == ‘‘ ) {
	
	$this->redirect(‘Index/index‘, array(), 3, ‘您尚未登录，正在跳转至登录页面...‘);
	
	} */
	//首页
    public function tankuang()
    {
        $openid = Request::instance()->param('openid');
		$where = [
			'user_openid'=>$openid
		];
		$shifou = Db::name('wx_user')->where($where)->find();
		if($shifou){
			return json(array('code'=>1));
		}else{
			return json(array('code'=>2));
		}
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
		if($data){
			if(md5($pass) == $data['user_pass']){
			
				 $this->success("登录成功","/index.php/admin/Index/index");
				 
				/* $this->redirect(url('admin/index')); */
			}else{
				 $this->error("密码错误");
			}
		}else{
			 $this->error("没有该用户");
		}
	}
	//推荐视频
	public function video_tuijian(){
		$data = Db::name('video')
		->alias('a')
		->join('teacher d', 'a.teacher_id = d.id')
		->join('kemu_cate b', 'a.video_kemu = b.id')
		->join('nianji_cate c', 'a.video_nianji = c.id')
		->field('a.*,d.teacher_name,b.kemu_cate,c.nianji_cate')
		->limit(4)
		->order("id desc")
		->select();
		if($data){
			return json(array('code'=>1,'msg'=>$data));
		}else{
			return json(array('code'=>2));
		}
	}
	//视频详细
	public function video_xiangxi(){
		$id = Request::instance()->param('id');
		$data = Db::name('video')
		->where("id=".$id)
		->find();
		if($data){
			return json($data);
		}else{
			return json(array('code'=>2));
		}
	}
	
	//全部视频
	public function video_quanbu(){
		 $page = request()->param('apage');
		$data = Db::name('video')
		->alias('a')
		->join('teacher d', 'a.teacher_id = d.id')
		->join('kemu_cate b', 'a.video_kemu = b.id')
		->join('nianji_cate c', 'a.video_nianji = c.id')
		->field('a.*,d.teacher_name,b.kemu_cate,c.nianji_cate')
		->order("id desc")
		->select();
		if($data){
			return json(array('code'=>1,'msg'=>$data));
		}else{
			return json(array('code'=>2));
		}
	}
	//个别老师视频
	public function video_teacher(){
		 $teacher_id = Request::instance()->param();
		 //var_dump($teacher_id);die;
		$data = Db::name('video')
		->alias('a')
		->join('teacher d', 'a.teacher_id = d.id')
		->join('kemu_cate b', 'a.video_kemu = b.id')
		->join('nianji_cate c', 'a.video_nianji = c.id')
		->field('a.*,d.teacher_name,b.kemu_cate,c.nianji_cate')
		->where("a.teacher_id=".$teacher_id['teahcer_id'])
		->order("id desc")
		->select();
		if($data){
			return json(array('code'=>1,'msg'=>$data));
		}else{
			return json(array('code'=>2));
		}
	}
	//科目选择
	public function select_kemu(){
		$data = Db::name('kemu_cate')->select();
		if($data){
			return json(array('code'=>1,'msg'=>$data));
		}else{
			return json(array('code'=>2));
		}
	}
	//年级目选择
	public function select_nianji(){
		$data = Db::name('nianji_cate')->select();
		if($data){
			return json(array('code'=>1,'msg'=>$data));
		}else{
			return json(array('code'=>2));
		}
	}
	//科目视频选择
	public function select_kemu_video(){
			$id = Request::instance()->param('id');
			$data = Db::name('video')
			->alias('a')
			->join('teacher d', 'a.teacher_id = d.id')
			->join('kemu_cate b', 'a.video_kemu = b.id')
			->join('nianji_cate c', 'a.video_nianji = c.id')
			->field('a.*,d.teacher_name,b.kemu_cate,c.nianji_cate')
			->order("id desc")
			->where("a.video_kemu=".$id)
			->select();
			if($data){
				return json(array('code'=>1,'msg'=>$data));
			}else{
				return json(array('code'=>2));
			}
		
	}
	public function audio_quanbu(){
		
		$data = Db::name('video')
		->alias('a')
		->join('teacher d', 'a.teacher_id = d.id')
		->join('kemu_cate b', 'a.video_kemu = b.id')
		->join('nianji_cate c', 'a.video_nianji = c.id')
		->field('a.*,d.teacher_name,b.kemu_cate,c.nianji_cate')
		->where("a.video_laiyuan=3")
		->order("id desc")
		->where("a.video_laiyuan=3")
		->select();
		if($data){
			return json(array('code'=>1,'msg'=>$data));
		}else{
			return json(array('code'=>2));
		}
	}
	public function select_kemu_audio(){
			$id = Request::instance()->param('id');
			$where = [
				'a.video_kemu'=>$id,
				'a.video_laiyuan'=>3
			];
			$data = Db::name('video')
			->alias('a')
			->join('teacher d', 'a.teacher_id = d.id')
			->join('kemu_cate b', 'a.video_kemu = b.id')
			->join('nianji_cate c', 'a.video_nianji = c.id')
			->field('a.*,d.teacher_name,b.kemu_cate,c.nianji_cate')
			->order("id desc")
			->where($where)
			->select();
			if($data){
				return json(array('code'=>1,'msg'=>$data));
			}else{
				return json(array('code'=>2));
			}
		
	}
	//全部资料
	public function ziliao_quanbu(){
		$data = Db::name('ziliao')
		->alias('a')
		/* ->join('teacher d', 'a.teacher_id = d.id') */
		->join('kemu_cate b', 'a.kemu_id = b.id')
		->join('nianji_cate c', 'a.nianji_id = c.id')
		->field('a.*,b.kemu_cate,c.nianji_cate')
		->order("id desc")
		->select();
		if($data){
			return json(array('code'=>1,'msg'=>$data));
		}else{
			return json(array('code'=>2));
		}
	}
	//资料选择
	public function select_kemu_ziliao(){
			$datas = Request::instance()->param();
			$where = array();
			if($datas['kemu_id'] == 0){
				$where['nianji_id'] = $datas['nianji_id'];
			}else if($datas['nianji_id'] == 0){
				$where['kemu_id'] = $datas['kemu_id'];
			}else{
				$where['kemu_id'] = $datas['kemu_id'];
				$where['nianji_id'] = $datas['nianji_id'];
			}
			$data = Db::name('ziliao')
			->alias('a')
			/* ->join('teacher d', 'a.teacher_id = d.id') */
			->join('kemu_cate b', 'a.kemu_id = b.id')
			->join('nianji_cate c', 'a.nianji_id = c.id')
			->field('a.*,b.kemu_cate,c.nianji_cate')
			->order("id desc")
			->where($where)
			->select();
			if($data){
				return json(array('code'=>1,'msg'=>$data));
			}else{
				return json(array('code'=>2));
			}
		
	}
	//自学打卡
	public function zixue_add(){
		
		$data = Request::instance()->param();
		
		$shichang =time() -  strtotime($data['kaishi']);
	/* 	echo time();
		echo "<br>";
		echo strtotime($data['kaishi']);
		echo "<br>";
		echo $shichang / 60;die; */
		
		  $file = request()->file('biji');
		    // 移动到框架应用根目录/static/uploads/ 目录下
		    $info = $file->move(ROOT_PATH . 'public' . DS . 'static'. DS . 'uploads');
			$res = Db::name("xuefen")->insert([
				'xingming'=>$data['xingming'],
				'kemu'=>$data['kemu'],
				'banji'=>$data['banji'],
				'biji'=>$info->getSaveName(),
				'xuefen'=>$shichang /60 * 0.1,
				'kaishi_time'=>$data['kaishi'],
				'jieshu_time'=>time('Y-m-d H:i:s'),
				'shichang'=>$shichang
			]);
			if($res){
				//return "<script>alert('打卡成功')</script>";
				$this->success('打卡成功');
			}else{
				//return "<script>alert('打卡失败')</script>";
				$this->success('打卡失败');
			}
	}
	//打卡数据
	public function zixue(){
		$res = Db::name("xuefen")->select();
		if($res){
			return json(array('code'=>1,'msg'=>$res));
		}else{
			return json(array('code'=>2));
		}
	}
	

}
