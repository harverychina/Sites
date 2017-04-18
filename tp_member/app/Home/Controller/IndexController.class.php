<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $articles = M('articles');
        $list = $articles->order('update_time DESC')->select();
        $this->assign('num', 0);  // 序号
        $this->assign('list', $list);
        $page = 1;
        $this->assign('page', $page);
        $this->display();
    }

    public function show()
    {
        $id = I('path.2');
//        dump($id);
        if($id){
            $articles = M('articles');
            $fitler = array('id'=>$id);
            $list = $articles->where($fitler)->find();
//            dump($result);
            $this->assign('list', $list);
            $page = 5;
            $this->assign('page', $page);
            $this->display('index');
        }else{
            $this->error('文章不存在！');
        }
    }
    public function login()
    {
//       显示登录
        $page = 2;
        $this->assign('page', $page);
        $this->display('index');
    }

    public function check_login()
    {
//        验证登录
        $users = M('users');
        $data = I('post.');
        /**
         * 验证内容
         * 验证账号和密码是否正确
         * 如正确，保存账号保存到 session ，重定向主页
         * 如账号不存在，重定向注册
         * 如密码不正确，返回重新输入
         */
        $filter = array('account'=> $data['account']);
        $result = $users->where($filter)->find();
        if(!$result){
            $this->error('账号不存在，请注册！', 'reg');
        }else if($result['password'] == md5($data['password'])) {
                // 使用md5加密方式判断密码
                $this->error('登录密码不正确！');
        }else{
            session('account', $data['account']);
            $this->success('登录成功！', 'index');
        }
    }

    public function logout()
    {
        session(null);
        $this->success('登出成功！', 'index');
    }
    public function reg()
    {
//        注册
        $page = 3;
        $this->assign('page', $page);
        $this->display('index');
    }

    public function check_reg()
    {
//        验证注册
        $users = M('users');  // 实例数据表 users
        $data = I('post.');  //  获取全部表单内容
        /**
         * 验证内容
         * 账号是否注册
         * 如没注册，补充数据，写入到表
         * 如注册，提示并重定向
         */
//        dump($data);
        if($data['account'] == ''){
            $this->error('注册账号必填！');
        }else if($data['password'] == ''){
            $this->error('注册密码必填！');
        }else if($data['rpassword'] == ''){
            $this->error('确认密码必填！');
        }else if($data['password'] != $data['rpassword']){
            $this->error('两次密码不一致！');
        }else{
            $filter = array('account'=> $data['account']);
            $result = $users->where($filter)->find();
//            dump($result);
            if($result){
                $this->error('账号已经存在，请重新注册！');
            }else{
                // 重新加入表中没有数据
                $data['password'] = md5($data['password']);  // md5加密码
                $data['img'] = '';  // 头像
                $data['points'] = 0;   // 积分
                $data['regtime'] = time();  // 注册时间
            }
//            dump($data);
            if($users->add($data)){
                $this->success('注册成功！', 'login');
            }else{
                $this->error('操作失败！', 'index');
            }
        }
    }
//  文章
    public function article()
    {
        if(session('?account')){
            $page = 4;
            $this->assign('page', $page);
            $this->display('index');
        }else{
            $this->error('请登录后，再发布文章！', 'login');
        }
    }

    public function create()
    {
        $artiles = M('articles');
        $data = I('post.');
        if($data['title'] == ''){
            $this->error('标题必填！');
        }else if($data['author'] == ''){
            $this->error('作者必填！');
        }else if($data['content'] == ''){
            $this->error('内容必填！');
        }else{
            $data['create_time'] = time();
            $data['update_time'] = time();
            if($artiles->add($data)){
                $this->success('发布成功！', 'index');
            }else{
                $this->error('操作失败！');
            }
        }
    }
}