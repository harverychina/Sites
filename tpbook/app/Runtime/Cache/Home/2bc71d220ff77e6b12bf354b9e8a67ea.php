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
            <h1 class="h1_book_title">图书列表</h1>
        	<ul>
                <?php if(is_array($bookList)): $i = 0; $__LIST__ = $bookList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                	<dl>
                    	<dd><a href="/tpbook/index.php/Home/Index/showDesc/<?php echo ($vo["id"]); ?>"><img src="/tpbook/Public/Images/<?php echo ($vo["img"]); ?>.jpg" alt="book" /></a></dd>
                        <dt>
                        	<p class="book_title"><a href="/tpbook/index.php/Home/Index/showDesc/<?php echo ($vo["id"]); ?>" target="_blank"><?php echo ($vo["name"]); ?></a></p>
                            <p class="book_inline">&#65509;<?php echo ($vo["price"]); ?></p>
                            <a class="book_buy" href="#" target="_blank">BUY</a>
                        </dt>
                    </dl>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
      </div>
        <p class="index_hr"></p>
        <div class="content_press">
        	<div class="press_porsen_01">
                <h1>新闻中心</h1>
            	<dl>
                	<dd><img src="/tpbook/Public/Images/img_men.jpg" alt="person" /></dd>
                    <dt>
                    	<p class="date">Nov 11, 2016</p>
                        <p class="book_title"><a href="#" target="_blank">Design Is a Job audiobook</a></p>
                        <p class="book_intro">
                        We’re pleased to announce that <a href="#">Design Is a Job</a> by Mike Monteiro is now available in audiobook format, through <a href="#">Audible.com</a> and <a href="#">Amazon.com</a>. Narrated by the raconteur himself, experience the guidance, real-talk, and humor of our seminal book on design as a job.
                        </p>
                    </dt>
                </dl>
            </div>
            <div class="press_porsen_02">
                <h1><span class="span_2"><a href="#"> 更多文章 →</a></span></h1>
            	<dl>
                	<dd><img src="/tpbook/Public/Images/img_lives.jpg" alt="book img" /></dd>
                    <dt>
                    	<p class="date">Mar 31, 2014</p>
                        <p class="book_title"><a href="#" target="_blank">A Few of Our Faves: March 31st</a></p>
                        <p class="book_intro">
                        As the madness of March comes to a close, we gathered up a few things that caught our attention during the last half of the month. <a href="#">Read on for more.</a>                        </p>
                    </dt>
                </dl>
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