<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>小型商城 TP-Shop</title>
    <link rel="stylesheet" href="/shop/Public/CSS/admin_index.css">
    <script src="/shop/Public/JS/jquery.min.js"></script>
    <script>
         $(document).ready(function () {
             $("#change").click(function () {
                 $base_url = "/shop/index.php/Admin/Index/verify";
                 $code_url = $base_url + '?'  + Math.random();
                 $(this).attr('src', $code_url);
             });
             // 添加商家按钮事件
             $("#add_store_btn").click(function () {
                 store_name = $("#store_name").val();
                 store_add = $("#store_add").val();
                 store_tel = $("#store_tel").val();
                 // 商家名
                 if(store_name == "" ) {
                     alert('商家信息不能为空');
                     $("#store_name").focus();
                     return false;
                 }
                 // 商家地址
                 if(store_add == "") {
                     alert('商家地址不能为空');
                     $("#store_add").focus();
                     return false;
                 }
                 // 商家电话
                 // 判断电话或手机的正则表达式//
                 var isMobile=/^(?:13\d|15\d|18\d|17\d)\d{5}(\d{3}|\*{3})$/;  // 手机
                 if(store_tel == "") {
                     alert('商家电话不能为空！');
                     $("#store_tel").focus();
                     return false;
                 }
                 if(!isMobile.test(store_tel)){
                     alert('联系手机号码不正确！');
                     $("#store_tel").focus();
                     return false;
                 }
                 // 提交表单
                 $("#add_store_form").submit();
             });
             // 查询商家
             $("#search_store_btn").click(function(){
                 var search_store_key = $("#search_store_key").val();
                 if(search_store_key == '') {
                     alert('查询商家名不能为空！');
                     $("#search_store_key").focus();
                     return false;
                 }
             });
             // 添加分类
             $("#add_category_btn").click(function () {
                 var category_name = $("#category_name").val();
                 if(category_name == "") {
                     alert('添加信息不能为空！');
                     $("#category_name").focus();
                     return false;
                 }
             });
             // 添加商品
             $("#add_good_btn").click(function () {
                 var good_name = $('#good_name').val();
                 var good_price = $('#good_price').val();
                 var good_height = $('#good_height').val();
                 var good_width = $('#good_width').val();
                 var good_feature = $('#good_feature').val();

                 if(good_name == "") {
                     alert('商品名称不能为空!');
                     $('#good_name').focus();
                     return false;
                 }
                 if(good_price == "") {
                     alert('商品价格不能为空!');
                     $('#good_price').focus();
                     return false;
                 }
                 if(good_height == "") {
                     alert('商品高度不能为空!');
                     $('#good_height').focus();
                     return false;
                 }
                 if(good_width == "") {
                     alert('商品宽度不能为空!');
                     $('#good_width').focus();
                     return false;
                 }
                 if(good_feature == "") {
                     alert('商品特征和特点不能为空!');
                     $('#good_feature').focus();
                     return false;
                 }

                 $("#add_good_form").submit();
             });


         })
    </script>
  </head>
  <body>
  <header>
      <div class="title"><h3>管理员主页</h3></div>
  </header>
  <div class="center">
      <div class="left">
          <ul class="menu">
              <li><a href="/shop/index.php/Admin/Index/show_good">商品管理</a></li>
              <li>
                  <ol>
                      <li><a href="/shop/index.php/Admin/Index/add_good">-添加商品</a></li>
                      <!--<li><a href="/shop/index.php/Admin/Index/mdf_good">-编辑商品</a></li>-->
                  </ol>
              </li>
              <li><a href="/shop/index.php/Admin/Index/show_category">分类管理</a></li>
              <li><a href="/shop/index.php/Admin/Index/show_member">客户管理</a></li>
              <li><a href="/shop/index.php/Admin/Index/show_store">商家管理</a></li>
              <li>
                  <ol>
                      <li><a href="/shop/index.php/Admin/Index/show_add_store">-添加商家</a></li>
                      <li><a href="/shop/index.php/Admin/Index/show_search_store">-查询商家</a></li>
                  </ol>
              </li>
              <li><a href="/shop/index.php/Admin/Index/change_pass">修改密码</a></li>
              <li><a href="/shop/index.php/Admin/Index/logout">退出系统</a></li>
          </ul>
      </div>
      <div class="right">
          <!-- 根据返回是什么页码内容引入什么文件  -->
          <?php switch($showpage): case "1": ?><div class="show_good">
    <h3>商品信息</h3>
    <div class="good_list">
        <table>
            <tr>
                <th>序号</th>
                <th>商品名</th>
                <th>商品价格</th>
                <th>上架时间</th>
                <th>操作</th>
            </tr>
            <!--  do while 或 while -->
            <?php if(is_array($good_list)): $i = 0; $__LIST__ = $good_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($good_id = $good_id + 1); ?></td>
                    <td><?php echo ($vo["name"]); ?></td>
                    <td><?php echo ($vo["price"]); ?></td>
                    <td><?php echo ($vo["time"]); ?></td>
                    <td>[<a href="/shop/index.php/Admin/Index/show_good_desc/<?php echo ($vo["id"]); ?>">更多</a>]</td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
        <!-- 分页栏 -->
        <!--<div class="result page"><?php echo ($Page); ?></div>-->
    </div>
</div><?php break;?>
              <?php case "11": ?><div class="add_good">
    <h3>添加商品</h3>
    <div class="add_good">
        <form action="/shop/index.php/Admin/Index/add_good_ok" method="POST" id="add_good_form">
            <label for="good_name">商品名称：</label><input type="text" id="good_name" name="good_name" placeholder="请输入商品名称">
            <label for="good_price">商品价格：</label><input type="text" id="good_price" name="good_price" placeholder="请输入商品价格">
            <label for="good_height">商品高度：</label><input type="text" name="good_height" id="good_height" placeholder="请输入商品高度,单位为：mm">
            <label for="good_width">商品宽度：</label><input type="text" name="good_width" id="good_width" placeholder="请输入商品宽度,单位为：mm">
            <label for="good_feature">商品宽度：</label><textarea name="good_feature" id="good_feature"  placeholder="请输入商品特征和特点"></textarea>
            <input type="button"  value="添加" id="add_good_btn">
        </form>
    </div>
</div><?php break;?>
              <!--<?php case "12": ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

</body>
</html><?php break;?>-->
              <?php case "13": ?><div class="show_good">
    <h3>商品详情</h3>
    <div class="good_list">
        <table>
            <tr>
                <td>序号</td>
                <td>商品名称</td>
                <td>商品高度（单位：mm）</td>
                <td>商品宽度（单位：mm）</td>
                <td>商品特征</td>
            </tr>
            <tr>
                <td><?php echo ($good_desc_list["good_id"]); ?></td>
                <td><?php echo ($good_name); ?></td>
                <td><?php echo ($good_desc_list["height"]); ?></td>
                <td><?php echo ($good_desc_list["width"]); ?></td>
                <td><?php echo ($good_desc_list["feature"]); ?></td>
            </tr>
        </table>
    </div>
</div><?php break;?>ß
              <?php case "2": ?><div class="show_category">
    <h3>分类管理</h3>
    <div class="add_category">
        <form action="/shop/index.php/Admin/Index/add_category" method="post">
            分类名：<input type="text" name="category_name" id="category_name">
            <input type="submit" value="添加" id="add_category_btn">
        </form>
    </div>
    <?php if(!empty($category_result)): ?><div class="show_category_result">
        <table>
            <tr>
                <th>序号</th>
                <th>分类名</th>
                <th>操作</th>
            </tr>
            <?php if(is_array($category_result)): $i = 0; $__LIST__ = $category_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <!-- <td><?php echo ($vo["id"]); ?></td> -->
                    <td><?php echo ($category_id = $category_id + 1); ?></td>
                    <td><?php echo ($vo["name"]); ?></td>
                    <td>[<a href="/shop/index.php/Admin/Index/del_category/<?php echo ($vo["id"]); ?>">删除</a>]</td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
        <!-- 分页栏 -->
        <div class="result page"><?php echo ($Page); ?></div><?php endif; ?>
    </div>
</div><?php break;?>
              <?php case "3": ?><div class="show_member">
	<h3>客户管理</h3>
	<div class="show_member_result">
		<table>
            <tr>
                <th>序号</th>
                <th>客户名</th>
                <th>性别</th>
                <th>联系电话</th>
                <th>注册时间</th>
                <th>操作</th>
            </tr>
            <?php if(is_array($member_result)): $i = 0; $__LIST__ = $member_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <!-- <td><?php echo ($vo["id"]); ?></td> -->
                    <td><?php echo ($member_id = $member_id + 1); ?></td>
                    <td><?php echo ($vo["user_id"]); ?></td>
                    <td>
                    <?php if($vo["user_gender"] == 1): ?>男<?php else: ?>女<?php endif; ?>
                    </td>
                    <td><?php echo ($vo["user_tel"]); ?></td>
                    <td><?php echo (date('Y-m-d',$vo["time"])); ?></td>
                    <td>[<a href="mdf_member/<?php echo ($vo["user_id"]); ?>">修改</a>][<a href="#">删除</a>]</td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
        <!-- 分页栏 -->
        <div class="result page"><?php echo ($Page); ?></div>
	</div>
</div><?php break;?>
              <!-- 修改客户资料  31 -->
              <?php case "31": ?><div class="show_member">
	<h3>客户管理</h3>
	<div class="show_member_result">
		<form action="/shop/index.php/Admin/Index/mdf_member_ok/<?php echo ($member_result["user_id"]); ?>" method="post">
            <p>客户名：<?php echo ($member_result["user_id"]); ?></p>
            <p>性别：
                <select name="gender" id="gender">
                    <option value="1">男</option>
                    <option value="2">女</option>
                </select>
            </p>
            <p>配送地址：<input type="text" name="user_add" id="user_add" value="<?php echo ($member_result["user_add"]); ?>"></p>
            <p>联系电话：<input type="text" name="user_tel" id="user_tel" value="<?php echo ($member_result["user_tel"]); ?>"></p>
            <p><input type="submit" id="mdf_member_btn" value="修改"></p>
        </form>
	</div>
</div><?php break;?>
              <?php case "4": ?><div class="show_store">
    <h3>商家信息</h3>
    <div class="store_list">
        <table>
            <tr>
                <th>序号</th>
                <th>商家名</th>
                <th>商家地址</th>
                <th>商家电话</th>
                <th>加盟时间</th>
                <th>操作</th>
            </tr>
            <!--  do while 或 while -->
            <?php if(is_array($store_list)): $i = 0; $__LIST__ = $store_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($vo["id"]); ?></td>
                    <td><?php echo ($vo["name"]); ?></td>
                    <td><?php echo ($vo["address"]); ?></td>
                    <td><?php echo ($vo["tel"]); ?></td>
                    <td><?php echo (date('Y-m-d',$vo["time"])); ?></td>
                    <td>[<a href="#">更新</a>]&nbsp;&nbsp;[<a href="/shop/index.php/Admin/Index/store_del_row/<?php echo ($vo["id"]); ?>">删除</a>]</td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
        <!-- 分页栏 -->
        <div class="result page"><?php echo ($Page); ?></div>
    </div>
</div><?php break;?>
              <?php case "41": ?><div class="add_store">
    <h3>添加商家</h3>
    <div class="add_store">
    <form action="/shop/index.php/Admin/Index/add_store" method="post" id="add_store_form">
    <label for="store_name">商家名：</label><input type="text" id="store_name" name="store_name" placeholder="请输入商家名">
    <label for="store_add">商家地址：</label><input type="text" id="store_add" name="store_add" placeholder="请输入商家地址">
    <label for="store_tel">商家电话：</label><input type="text" id="store_tel" name="store_tel" placeholder="请输入商家手机">
    <input type="button" value="添加" id="add_store_btn">
    </form>
    </div>
</div><?php break;?>
              <?php case "42": ?><div class="search_store">
    <h3>查询商家</h3>
    <div class = "store_search">
        <form action="/shop/index.php/Admin/Index/show_search_store_result" method="post">
            商家名：<input type="text" name="search_store_key" id="search_store_key"><input type="submit" value="查询" id="search_store_btn">
        </form>
        <?php if($store_info != ''): ?><table>
                <tr>
                    <th>序号</th>
                    <th>商家名</th>
                    <th>商家地址</th>
                    <th>商家电话</th>
                    <th>加盟时间</th>
                </tr>
                <noempty name="store_info">
                    <?php if(is_array($store_info)): $i = 0; $__LIST__ = $store_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td><?php echo ($vo["id"]); ?></td>
                            <td><?php echo ($vo["name"]); ?></td>
                            <td><?php echo ($vo["address"]); ?></td>
                            <td><?php echo ($vo["tel"]); ?></td>
                            <td><?php echo (date('Y-m-d',$vo["time"])); ?></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </noempty>
            </table><?php endif; ?>
    </div>
</div><?php break;?>
              <?php case "5": ?><div class="chang_pass_row">
    <form action="/shop/index.php/Admin/Index/change_pass_ok" method="post">
        旧的密码：<input type="password" name="oldpass" id="oldpass">
        新的密码：<input type="password" name="newpass" id="newpass">
        确认密码: <input type="password" name="rpass" id="rpass">
        <img src="/shop/index.php/Admin/Index/verify" alt="" id="change">
        验证码： <input type="text" name="code" id="code">
        <input type="submit" value="修改" id="btn">
    </form>
</div><?php break; endswitch;?>
      </div>
  </div>
  <footer>
      <p>小型购物商城管理员主页</p>
  </footer>
  </body>
</html>