<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>会员管理系统----主页</title>
    <!-- Bootstrap -->
    <link href="/tp_member/Public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/tp_member/Public/css/style.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <ul class="nav navbar-nav">
            <li class="active"><a href="/tp_member/index.php/Home/Index/index">会员管理系统</a></li>
            <li><a href="/tp_member/index.php/Home/Index/article">发布文章</a></li>
            <li><a href="#">会员查询</a></li>
            <li><a href="#">会员积分</a></li>
        </ul>
        <?php if((session('account') != '')): ?><ul class="nav navbar-nav navbar-right">
                <li><a href="#"><?php echo session('account');?></a></li>
                <li><a href="/tp_member/index.php/Home/Index/logout">登出</a></li>
            </ul>
        <?php else: ?>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/tp_member/index.php/Home/Index/login">登录</a></li>
                <li><a href="/tp_member/index.php/Home/Index/reg">注册</a></li>
            </ul><?php endif; ?>
    </div>
</nav>
<div class="container">
<?php if($page == 1): ?><!-- 首页内容 -->
    <div class="row">
    <div class="container">
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-sm-8 blog-post">
                <h2 class="blog-title"><?php echo ($vo["title"]); ?></h2>
                <p class="blog-post-meta"><?php echo (date('Y年m月d日',$vo["update_time"])); ?></p>
                <p><?php echo ($vo["content"]); ?></p>
                <a href="/tp_member/index.php/Home/Index/show/<?php echo ($vo["id"]); ?>"><span class="badge">More...</span></a>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>

<?php elseif($page == 2): ?>
    <!-- 登录内容 -->
    <div class="row">
    <div class="container">
        <form action="/tp_member/index.php/Home/Index/check_login" method="post" class="form-group">
            <h3>用户登录</h3>
            <label for="account"></label><input type="text" name="account" id="account" class="form-control">
            <label for="password"></label><input type="password" name="password" id="password" class="form-control">
            <input type="submit" value="登录" class="btn btn-primary">
            <span class="verify"></span>
        </form>
    </div>
</div>
<?php elseif($page == 3): ?>
    <!-- 注册内容 -->
    <div class="row">
    <div class="container">
        <form action="/tp_member/index.php/Home/Index/check_reg" method="post" class="form-group">
            <h3>用户注册</h3>
            <label for="account">注册账号</label><input type="text" name="account" id="account" class="form-control" placeholder="请输入注册账号">
            <label for="password">注册密码</label><input type="password" name="password" id="password" class="form-control" placeholder="请输入注册密码">
            <label for="rpassword">确认密码</label><input type="password" name="rpassword" id="rpassword" class="form-control" placeholder="请输入确认密码">
            <input type="submit" value="注册" class="btn btn-primary">
            <span class="verify"></span>
        </form>
    </div>
</div>
<?php elseif($page == 4): ?>
    <!-- 发布文章 -->
    <div class="row">
    <div class="container">
        <form action="/tp_member/index.php/Home/Index/create" method="post" class="form-group">
            <h3>发布文章</h3>
            <label for="">标题</label><input type="text" name="title" id="title" class="form-control">
            <label for="">作者</label><input type="text" name="author" id="author" value="<?php echo session('account');?>" class="form-control">
            <label for="">内容</label><textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
            <input type="submit" value="发布" class="btn btn-primary">
        </form>
    </div>
</div>
<?php elseif($page == 5): ?>
<!-- 发布文章 -->
    <div class="row">
    <div class="container">
        <div class="media">
            <a class="media-left" href="#">
                <img src="..." alt="...">
            </a>
            <div class="media-body">
                <h4 class="media-heading"><?php echo ($list["title"]); ?></h4>
                <small>作者：<?php echo ($list["author"]); ?></small>
                <small>创建时间：<?php echo (date('Y年m月d日',$list["create_time"])); ?></small>
                <small>更新时间：<?php echo (date('Y年m月d日',$list["update_time"])); ?></small>
                <article><?php echo ($list["content"]); ?></article>
            </div>
        </div>
    </div>
</div><?php endif; ?>
</div>
<div class="row">
    <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
        <p class="text-center">广州市工贸技师学院信息服务产业系</p><p class="text-center">网站功能开发作品</p>
    </nav>
</div>
</body>
<script src="/tp_member/Public/JS/jquery.min.js"></script>
</html>