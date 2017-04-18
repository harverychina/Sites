<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
    // 登出系统
    public function logout() {
        session(null);
        $this->redirect('Home/Index/index','退出系统中....');
//        $this->success('退出成功！', U('Home/Index/login'));
    }
   //  验证码
    public function verify() {
        $verify =new \Think\Verify();
        $verify->entry();
    }

    // 显示修改密码
    public function change_pass() {
        // 设置跳转页码（普通变量）
        $this->assign('showpage','5');
        $this->display('index');
    }

    // 修改密码
    public function change_pass_ok(){
        /**
         * 1、判断空值
         * 2、旧密码与输入是否一致
         * 3、两次密码输入是否一致
         *  I('post.oldpass')  旧密码
         *  I('post.newpass')  新密码
         *  I('post.rpass')    重复密码
         *  I('post.code')     验证码
         */
        // 实例化数据  member
        $member = M('member');
        //  空密码
        if(I('post.oldpass') != '' && I('post.newpass') != '' && I('post.rpass') != '' && I('post.code') != ''){
            // 新和旧密码是否一致
            if (I('post.oldpass') != I('post.newpass')) {
                 // 进行旧密码判断是否正确
                // 条件数组
                $filter = array(
                    'user_id' => session('id')
                );
                $row_cnt = $member->where($filter)->find();
                    // 比较当前用户输入的旧密码是否与数据库中的旧密码一致
                if(md5(I('post.oldpass')) == $row_cnt['user_pass']) {
                    // 两次输入新密码是否一致
                    if(I('post.newpass') == I('post.rpass')) {
                        // 重新组合数据
                        $data = array(
//                            当前登录用户ID
                            'user_id' => session('id'),
                            'user_pass' => md5(I('post.newpass'))
                        );
                        // 更新操作
                        if($cnt = $member->save($data)) {
                            $this->success('修改成功！', U('Home/Index/login'));
                        } else {
                            $this->error('修改失败！');
                        }
                    } else {
                        $this->error('两次输入新密码不一致！');
                    }
                } else {
                    $this->error('旧密码不正确！');
                }
            } else {
                $this->error('旧密码与新密码一样，请重新输入！');
            }

        } else {
            $this->error('修改信息不能为空！');
        }
    }

    // 显示商家
    public function show_store() {
        // 显示当前商家数据表
        $store = M('store');
        // 总记录数
        $count = $store->count();
        // 实例化分页类，传入总记录数和每页显示的记录数  每页10条记录
        $Page = new \Think\Page($count,5);
        // 设置分页参数
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('first','第一页');
        $Page->setConfig('last','最后一页');
        $Page->setConfig ( 'theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%' );
        // 分页显示输出
        $show = $Page->show();
        // 进行分页查询 注意limit方法的参数要使用Page类的属性
        $store_list = $store->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        // 局部变量
        $this->assign('store_list', $store_list);
        // 分页变量输出模板
        $this->assign('Page', $show);
        $this->assign('showpage', '4');
        $this->display('index');
    }

    // 显示添加商家
    public function show_add_store() {
        $this->assign('showpage', '41');
        $this->display('index');
    }
    // 添加商家信息
    public function add_store() {
        $store = M('store');
        // 判断用户输入
        if(I('post.store_name') != '' && I('post.store_add') != '' && I('post.store_tel') != '') {
            $filter = array(
                'name' => I('post.store_name')
            );
           // 查是否已经存在
            if($row_cnt = $store->where($filter)->find()) {
                $this->error('商家已经存在，请重新填写信息！');
            } else {
                // 重组数据
                $data = array(
                    'id' => null,
                    'name' => I('post.store_name'),
                    'address' => I('post.store_add'),
                    'tel' => I('post.store_tel'),
                    'time' => time(),
                );

                if($store->add($data)) {
                    $this->success('添加成功！', U('show_store'));

                } else {
                    $this->error('添加失败！');
                }
            }
        } else {
            $this->error('添加商家信息不能空！');
        }
    }
    // 显示查询商家
    public function show_search_store() {
        $this->assign('showpage', '42');
        $this->display('index');
    }
    // 查询商家结果
    public function show_search_store_result() {
        $store = M('store');
        $filter = array(
            'name' => I('post.search_store_key')  // 以商家名为查询条件
        );
        $rs = $store->where($filter)->select();
        $this->assign('store_info', $rs);
        $this->assign('showpage', '42');
        $this->display('index');
    }
    // 删除商家
    public function store_del_row() {
        $store = M('store');
        // Path-info url 模式 获取 数据ID  http://www.xxx.com/?id='5'   ===> http://www.xxx.com/id/5
//        var_dump(I('path.2'));
        $filter = array(
            'id' => I('path.2')
        );
        // 有必须当前检查用户删除记录ID
        $cnt = $store->where($filter)->find();
        if($cnt) {
            if($store->where($filter)->delete()) {
                $this->success('删除成功！', U('show_store'));
            }
        } else {
            $this->error('当前数据不存在！');
        }
    }
    // 显示分类管理
    public function show_category() {
        $category = M('category');
        $count = $category->count();
        $Page = new \Think\Page($count, 10);
        // 设置分页参数
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('first','第一页');
        $Page->setConfig('last','最后一页');
        $Page->setConfig ( 'theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        // 分页输出
        $show = $Page->show();
        // 按分页要求查出数据源
        $category_result = $category->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        // 数据源输出模板
        $this->assign('category_result', $category_result);
        $this->assign('showpage', '2');
        // 分类自编ID
        $this->assign('category_id' , 0);
        // 分页输出模板
        $this->assign('Page', $show);
        $this->display('index');
    }
    // 添加分类
    public function add_category() {
        $category = M('category');
        $data = array(
            'id' => null,
            'name' => I('post.category_name'),
        );
        $category->add($data);
        $this->assign('showpage', '2');
        $this->success('添加成功！',U('show_category'));
    }
    // 删除分类
    public function del_category() {
        $category = M('category');
        $filter = array(
            'id'=>I('path.2'),
        );
        $category->where($filter)->delete();
        $this->success('删除成功！', U('show_category'));
    }

    // 显示客户
    public function show_member() {
        // 显示除了管理员外的用户名单
        $member = M('member');
        $count = $member->where("flag <> 1")->count();
        $Page = new \Think\Page($count, 10);
        // 设置分页参数
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('first','第一页');
        $Page->setConfig('last','最后一页');
        $Page->setConfig ( 'theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        // 分页输出
        $show = $Page->show();
        // 按分页要求查出数据源
        $rs =  $member->where("flag <> 1")->select();
        $this->assign('member_result', $rs);
        // 分页变量
        $this->assign('Page', $show);
        $this->assign('member_id' , 0);
        $this->assign('showpage', '3');
        $this->display('index');
    }


    // 显示修改客户信息
    public function mdf_member() {
        $member = M('member');
        // 查询用户
        $filter = array(
            'user_id' => I('path.2'),
        );

        $rs = $member->where($filter)->find();
        $this->assign('member_result', $rs);
        $this->assign('showpage' , '31');
        $this->display('index');
    }


    // 确定修改客户信息
    public function mdf_member_ok() {
        $member = M('member');

        $data = array(
            'user_id' => I('path.2'),
            'user_gender' => I('post.gender'),
            'user_add' => I('post.user_add'),
            'user_tel' => I('post.user_tel')
        );

        // var_dump($data);
        if($member->save($data)) {
            $this->success('修改成功！');
        } else {
            $this->error('修改失败！');
        }

    }
    //    显示商品
    public function show_good()
    {
        $good = M('good');
        $good_list = $good->order('time')->select();
        $this->assign('good_list', $good_list);
        $this->assign('showpage', '1');
        $this->display('index');
    }
    //   显示商品详情
    public function show_good_desc()
    {
        $good = M('good');
        $good_desc = M('desc');

        $filter = array(
            'id' => I('path.2')
        );
        $good_name= $good->where($filter)->getField('name');
        $good_desc = $good_desc->where($filter)->find();
        $this->assign('good_name',$good_name);
        $this->assign('good_desc_list', $good_desc);
        $this->assign('showpage', '13');
        $this->display('index');

    }
    //   显示添加商品
    public function add_good()
    {
        $this->assign('showpage', '11');
        $this->display('index');
    }
    //  添加商品
    public function add_good_ok()
    {
        $good = M('good');
        $desc = M('desc');

        $good_data = array(
            'id' => null,
            'name' => I('post.good_name'),
            'price' => I('post.good_price'),
            'status'=> 1,
            'time' => time(),
        );
        $good->add($good_data);

        $desc_data = array(
            'good_id' => null,
            'height' => I('post.good_height'),
            'width' => I('post.good_width'),
            'feature' => I('post.good_feature'),
        );
        $desc->add($desc_data);
        $this->success('添加成功！', U('show_good'));

    }

}
