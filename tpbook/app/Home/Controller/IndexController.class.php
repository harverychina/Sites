<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        // 首页
        $info = M('info');
        $rs = $info->order('id')->select();
        $this->assign('bookList', $rs);
        $this->display();
    }

    // 显示每一商品详细内容
    public function showDesc()
    {
        // 显示对就商品详细内容
        $info = M('info');
        // 将页传递过来的ID做为条件放在数组中
        $data = array(
          'id' => I('path.2')
        );
        $rs = $info->where($data)->find();
        $this->assign('bookDesc', $rs);
        $this->display();
    }

}