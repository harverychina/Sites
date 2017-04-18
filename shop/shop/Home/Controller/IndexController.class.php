<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
//    打开首页  显示最新商品
    public function index(){
        $this->display();
    }
//    显示登录
    public function show_login() {
        $this->display('login');
    }
//     显示注册页
    public function reg() {
        $this->display('reg');
    }

    // 验证码
    public function verify() {
        $Verify = new \Think\Verify();
        $Verify->entry();
    }
    // 验证注册
    public function check_reg() {
//      实例化数据表
        $member = M('member');
//      接收表单传递数据
        $username = I('post.username');
        $password = I('post.password');
        $rpassword = I('post.rpassword');
        $code = I('post.code');

        if($username != '' && $password != '' && $rpassword != '' && $code != '') {
            // 验证码核对
        $verify = new \Think\Verify();
            if($verify->check($code, $id)){
//  设置数据操作条件
                 $filter = array('user_id'=> $username);
                 if(!$rs = $member->where($filter)->find()) {
                    // 重新组成数据
                    $data = array(
                        'user_id'=>$username,
//                        用户确认密码信息中进行加密  使用 MD5 掩盖
                        'user_pass'=>MD5($password),
                        'user_gender'=>0,
                        'user_add'=>'',
                        'user_tel'=>'',
                        'user_img'=>'',
                        'flag'=>2,  // 普通用户注册
                        'time'=>time()
                    );
                    $member->add($data);
                    $this->success('注册成功！', U('login'));
                 } else {
                    $this->error('账号已经注册，请重新填写！');
                 }
            } else {
                $this->error('验证码不正确！');
            }
        } else {
            $this->error('注册信息不能为空！');
        }
    }


    // 验证登录
    public function check_login() {
        $member = M('member');

        $username = I('post.username');
//        将用户输入的密码进行加密 MD5
        $password = I('post.password');
        $code = I('post.code');

        if($username != '' && $password != '' && $code != '') {
            $verify = new \Think\Verify();
            if($verify->check($code, $id)){
                $filter = array('user_id' => $username);

                if($rs = $member->where($filter)->find()){

                    if(MD5($password) == $rs['user_pass']) {
                        session('id', $username);
//                        根据身份不同跳转不同操作页
                        if($rs['flag'] == 1){
                            $this->success('登录成功！', U('Admin/Index/index'));
                        } else {
                            $this->success('登录成功！', U('index'));
                        }
                    } else {
                        $this->error('密码不正确！');
                    }
                } else {
                    $this->error('用户不存在，请注册！', U('reg'));
                }

            } else {
                $this->error('验证码不正确！');
            }
        } else {
            $this->error('用户账号或密码或验证码不能为空！');
        }
    }

    // 登出
    public function logout() {
        session(null);
        $this->success('登出成功！', U('index'));
    }
//  显示商品
    public function show_good() {
        $good = M('good');

        $filter = array(
            'id' => I('path.2')
        );


//        var_dump($id);
        $rs = $good->where($filter)->find();

        var_dump($id);

    }
}
