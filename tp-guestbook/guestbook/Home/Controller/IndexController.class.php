<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	// 默认显示首页 在view目录与 class 名字一样目录 index.html
        $msg = M('messages');
        // SELECT * FORM messages ORDER time
        $this->msg_info = $msg->order('time')->select();
    	$this->display();
    }

    // 登录
    public function login() {
    	$this->display('login');  // 调用视图目录 Index 中的 login.html
    }

    // 注册
    public function reg() {
    	$this->display('reg');
    }

    // 生成验证码
    public function Verify() {
    /*
        //英文验证码
        // 实例化TP框架验证码类的对象  $Verify
        $Verify = new \Think\Verify();
        // 使用 entry 方法 输出验证码内容  视图显示
        $Verify->entry();
    */

    // 中文验证码
    // 验证码参数
        $config = array(
            'fontsize' => 30,      // 验证码字体大小
            'length' => 4,         // 验证码位数
            'useNoise' => fasle,   // 关闭验证码杂点
        );
        $Verify = new \Think\Verify();
        // 验证码字体使用 ThinkPHP/Library/Think/Verify/ttfs/5.ttf
        // 启用中文验证码
        // $Verify->useZh = true;
        // 自定义中文字符串
        // $Verify->zhSet = '贸技服务产工师学院信息业广州市系';

        $Verify->entry();
    }

    // 校验注册
    public function checkreg() {

        // 数据库中表模块化，实例化
        $member = M('member');

        $username = I('post.username');
        $password = I('post.password');
        $rpassword = I('post.rpassword');
        $code = I('post.code');
        // 判断验证码
        $verify = new \Think\Verify();
        // exit($verify->check($code) ? '验证成功' : '验证失败');
        if(!$verify->check($code)){
            $this->error('验证码不正确！');
        } else {
        // 判断两次密码
            if($password != $rpassword) {
                // 两次输入密码是否正确
                $this->error('两次密码不一致！');
            } else {
                // 过滤条件
                $filter = array(
                    'id' => $username,
                );
            // 确认账号是否被注册过
                $member_info = $member->where($filter)->find();
                if(IS_NULL($member_info)){
                    // 没有注册过
                    $data = array(
                        'id' => $username,
                        'pass' => $password,
                        // 'pass' => md5($password),
                        'flag'=>2,
                        'regtime'=>strtotime(date('Y-m-d H:i:s'))
                    );

                    $member->add($data);
                    $this->success('注册成功, 请登录！', U('login'));

                } else {
                    $this->error('注册失败！');
                }
            }
        }
    }

    // 校验登录
    public function checklogin() {
        $member = M('member');

        /*if(!IS_AJAX){
            $this->ajaxReturn(array(
                'info' => '非法的请求方式'
            ));
        }*/

        $username = I('post.username');
        $password = I('post.password');

        $filter = array(
            'id' => $username,
        );

        $member_info = $member->where($filter)->find();

        if(!IS_NULL($member_info)){
            // 加密码判断是否一致
            if( $member_info['pass'] == $password) {
                // 保存用户登录信息
                session('id', $username);
                $this->success('登录成功！', U('Index'));
            } else {
                $this->error('密码错误！');
            }

        } else {
            $this->error('账号不存在，请注册!', U('reg'));
        }
    }

    //登出
    public function logout() {
        session('id', null); // 清除当前session id值
        // session(null); // 清除所有session
        $this->success('登出成功', U('index'));
    }

    // 发布留言
    public function send() {
        $messages = M("messages");

        $message =I('post.msg');
        // 是否登录过账号
        if(I('session.id')) {
            $id = I('session.id');
        } else {
            $id = 'guest';
        }

        $data = array(
            'author' => $id,
            'msg' => $message,
            'time' => strtotime(date("Y-m-d H:i:s"))
        );
        // var_dump($messages);
        $messages->add($data);
        $this->success('发表成功', U('index'));
    }
}
