<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        // 首页
        $content = D('content');
        $row = $content->order('time DESC')->limit(10)->select();
        $this->assign('row',$row);
        $this->display('');
    }
    // 发布博文
    public function show_in(){
        // 分类
        $type = D('type');
        $data = $type->order('id')->select();
        $this->assign('data',$data);

        $this->assign('item','发布博文');
        $this->display('index');
    }
    // // 显示博文
    // public function show_desc(){
    //     $id = $_GET["_URL_"][2];
    //     echo $id;
    // }
    // 添加博文
    public function addfile(){
        $form = array(
            'title' => I('post.title'),
            'author' => I('post.author'),
            'content' => I('post.content'),
            'time' => strtotime(date("Y-m-d H:i:s")),
            'type_id'=>I('post.type_id'),
            );
        // dump($form);exit;
        $content = D('content');
        if($content->create($form)){
            $result = $content->add();
            if($result){
                $this->success('发布成功！',U('Index'));
            }
        }else{
            $this->error($content->getError());
        }
        
    }
    // 删除博文
    public function delfile(){
        // 是删除那一条记录，关键ID
        $content = D('content');
        $row = $content->order('time DESC')->limit(10)->select();
        $this->assign('row',$row);

        $this->assign('item','删除博文');
        $this->display('index');
    }
    //删除博文
    public function del_ok(){
        // 从URL地址中截取第2个地址段，即是ID参数
        $id = I('path.2');
        //dump($id);
        $content = D('content');
        $result = $content->where("id='".$id."'")->delete();
        if($result){
            $this->success('删除成功！',U('index'));
        }
    }
    // 显示选择更新博文
    public function show_update(){
        // 实例化
        $content = D('content');
        $row = $content->order('time DESC')->select();
        $this->assign('row',$row);
        // 跳转显示更新模板
        $this->assign('item','选择更新博文');
        $this->display('index');
    }
    // 显示详细更新内容
    public function show_update_file(){
        /*
        * 1、先查询ID对应的内容
        * 2、再查询ID对应的分类名称
        * 3、赋值模版变量，输出模板
         */
        $id = I('path.2');
        $content = D('content');
        $result = $content -> where("id='".$id."'")->find();
        $type = D('type');
        $type_result = $type->where("id='".$result['type_id']."'")->find();
        $this->assign('type_name',$type_result['name']);
        $this->assign('data',$result);
        $this->assign('item','详细更新博文');
        $this->display('index');
    }
    // 更新博文
    public function update_ok(){
        /*
        *1、如何将已经有的数据从数据库中提取出来
        *2、如何将新数据保存到数据库对应的记录中
         */
        $form = array(
            'id' => I('post.id'),
            'title' => I('post.title'),
            'author' => I('post.author'),
            'content' => I('post.content'),
            );
        // dump($form);
        if($form != null){
            $content = D('content');
            $result = $content ->save($form);
            // dump($result);exit;
            if($resut){
                $this->success('更新成功！',U('Index/show_update'));
            }else{
                $this->success('更新内容没有变化！',U('Index/show_update'));
            }
        }else{
            $this->error('更新内容不能为空！');
        }
    }
    // 显示添加分类
    public function showtype(){
        $this->assign('item','显示添加分类');
        $this->display('index');
    }
    // 添加分类
    public function addtype(){
        $form = array(
            'name' => I('post.upname'),
            );
        // dump($form);exit;
        $type = D('type');
        $result = $type ->add($form);
        if($result){
            $this->success('添加分类成功！',U('Index/showtype'));
        }
    }
    // 显示分类条目
    public function typedesc(){
        $this->assign('item','显示分类条目');
        $type = D('type');
        $result = $type -> order('id')->select();
        $this->assign('data',$result);
        $this->display('index');
    }
    // 删除分类
    public function deltype(){
        $id = I('path.2');
        // dump($id);
        $type = D('type');
        $result = $type ->where("id='".$id."'")->delete();
        $this->success('删除分类成功！',U('Index/typedesc'));
    }
    // 显示博文内容
    public function show_desc(){
        $id = I('path.2');
        // dump($id);
        $content = D('content');
        $data = $content->where("id='".$id."'")->find();
        // dump($data);
        $this->assign('item','显示博文内容');
        $this->assign('news',$data);
        $this->display('index');
    }
}