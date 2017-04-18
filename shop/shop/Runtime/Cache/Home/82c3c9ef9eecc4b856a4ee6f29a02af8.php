<?php if (!defined('THINK_PATH')) exit();?><<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>小型商城 TP-Shop</title>
    <link rel="stylesheet" href="/shop/Public/CSS/index.css">
    <script src="/shop/Public/JS/jquery.min.js"></script>
</head>
<body>
<header>
    <div class="title">
        <h3>TP-Shop</h3>
        <p>能使您满意的商场！</p>
    </div>
    <div class="sidebar">
        <?php if(empty($$id = session('id'))): ?><ul>
                <li><a href="/shop/index.php/Home/Index/show_login">登录</a></li>
                <li><a href="/shop/index.php/Home/Index/reg">注册</a></li>
            </ul>
            <?php else: ?>
            <ul>
                <li><a href="#"><?php echo session('id');?></a></li>
                <li><a href="/shop/index.php/Home/Index/logout">登出</a></li>
            </ul><?php endif; ?>
    </div>
</header>
<div class="banner">
    <img src="/shop/Public/images/banner.jpg" alt="banner">
</div>
<article>
    <div class="sea_bar">
        <form method="POST">
            <input type="text" name="sea_key" id="sea_key"><input type="submit" value="查询" id="sea_button">
        </form>
    </div>
    <div class="good_list">
        <div class="row">
            <h4>最新商品 New</h4>
            <ul>
                <li><a href="/shop/index.php/Home/Index/show_good/1"><img src="/shop/Public/images/goods/01.jpg" alt=""></a>¥ 65</li>
                <li><a href="#"><img src="/shop/Public/images/goods/02.jpg" alt=""></a>¥ 40</li>
                <li><a href="#"><img src="/shop/Public/images/goods/03.jpg" alt=""></a>¥ 35</li>
                <li><a href="#"><img src="/shop/Public/images/goods/04.jpg" alt=""></a>¥ 30</li>
                <li><a href="#"><img src="/shop/Public/images/goods/05.jpg" alt=""></a>¥ 65</li>
                <li><a href="#"><img src="/shop/Public/images/goods/06.jpg" alt=""></a>¥ 20</li>
                <li><a href="#"><img src="/shop/Public/images/goods/07.jpg" alt=""></a>¥ 15</li>
                <li><a href="#"><img src="/shop/Public/images/goods/08.jpg" alt=""></a>¥ 30</li>
            </ul>
        </div>
    </div>
</article>
<footer>
    <!--<h4>小组名：****小组 制作人员：***</h4>-->
    <h4>&copy;广州市工贸技师学院&nbsp;信息服务产业系&nbsp;《网站功能开发原生篇》 </h4>
</footer>
</body>
</html>