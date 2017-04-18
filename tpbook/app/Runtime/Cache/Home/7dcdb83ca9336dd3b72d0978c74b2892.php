<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <title>网上书店</title>
    <link type="text/css" rel="stylesheet" href="/tpbook/Public/Css/reset.css" />
    <link type="text/css" rel="stylesheet" href="/tpbook/Public/Css/1024_768.css" />
    <link type="text/css" rel="stylesheet" media="screen and (min-width:861px) and (max-width:960px)" href="/tpbook/Public/Css/pad_heng.css" />
    <link type="text/css" rel="stylesheet" media="screen and (min-width:601px) and (max-width:860px)" href="/tpbook/Public/Css/pad.css" />
    <link type="text/css" rel="stylesheet" media="screen and (min-width:481px) and (max-width:600px)" href="/tpbook/Public/Css/tel_heng.css" />
    <link type="text/css" rel="stylesheet" media="screen and (max-width:480px)" href="/tpbook/Public/Css/tel.css" />
    <link rel="stylesheet" href="/tpbook/Public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/tpbook/Public/Css/showDesc.css">
</head>

<body>
<div class="w_100_l">
    <div class="main">
        <div class="top_banner">
            <div class="top_logo"><img src="/tpbook/Public/Images/top_logo.jpg" alt="ONLINE BOOK STORE LOGO" /></div>
            <div class="top_menu">
                <ul>
                    <li class="sel"><a href="/tpbook/index.php/Home/Index/">首页</a></li>
                    <li><a href="#">书城</a></li>
                    <li><a href="#">出版社</a></li>
                    <li><a href="#">关于我们</a></li>
                    <li><a href="#">帮助</a></li>
                </ul>
            </div>
            <div class="top_shop_cur"><a href="#"><img src="/tpbook/Public/Images/top_shop_cur.jpg" alt="shopping car" /></a></div>
        </div>
        <span class="index_img"><img src="/tpbook/Public/Images/banner_img.jpg" alt="Dan Cederholm" border="0" usemap="#Map" />
        <map name="Map" id="Map">
          <area shape="rect" coords="857,230,930,269" href="#" alt="buy now" />
        </map>
        </span>
        <p class="index_hr"></p>
<div class="content">
    <div class="row">
        <div class="col-xs-6 col-md-6"><img src="/tpbook/Public/Images/<?php echo ($bookDesc['img']); ?>.jpg" alt="goodImg" class="img-rounded"></div>
        <div class="col-xs-6 col-md-6">
            <p>书名：<?php echo ($bookDesc['name']); ?></p>
            <p>ISBN：<?php echo ($bookDesc['isbn']); ?></p>
            <p>出版社<?php echo ($bookDesc['press']); ?></p>
            <p>作者：<?php echo ($bookDesc['author']); ?></p>
            <p>价格：<?php echo ($bookDesc['price']); ?></p>
            <p>出版时间：<?php echo (date("Y年m月d日",$bookDesc['pubtime'] )); ?></p>
            <a class="book_buy" href="#">BUY</a>
        </div>
    </div>
</div>
        <p class="index_hr"></p>
            <div class="footer">
                <span class="span_1">&copy; Copyright 2016, 网上书店, 主要用于Web教学使用，不用于商业用途！</span>
                <span class="span_2"><img src="/tpbook/Public/Images/icon_hg.jpg" align="absmiddle" /><b><a href="http://www.gzittc.com">广州市工贸技师学院 Gzittc.com</a></b></span>
            </div>
        </div>
    </div>
    <script src="/tpbook/Public/bootstrap/js/jquery.min.js"></script>
    <script src="/tpbook/Public/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>