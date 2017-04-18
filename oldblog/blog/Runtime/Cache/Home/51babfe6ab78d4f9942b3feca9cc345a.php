<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>个人博客</title>
        <link rel="stylesheet" type="text/css" href="/Public/css/style.css">
    </head>
    <body>
    <div class="container">
        <div class="header">
            <a href="/index.php/Home/index"><h2>个人博客</h2></a>
        </div>
        <div class="body">
            <div class="banner_row">
                <h2>网站功能模块开发---ThinkPHP框架</h2>
                <p>个人博客</p>
            </div>
            <!-- 菜单 -->
            <div class="left">
                <a href="/index.php/Home/Index/show_in" class="menu">发布博文</a>
                <a href="/index.php/Home/Index/show_update" class="menu">更新博文</a>
                <a href="/index.php/Home/Index/delfile" class="menu">删除博文</a>
                <a href="/index.php/Home/Index/showtype" class="menu">添加分类</a>
                <a href="/index.php/Home/Index/typedesc" class="menu">删除分类</a>
            </div>
            <!-- 内容 -->
            <div class="right">
                <?php if(($item == '发布博文')): ?><div class="rrow">
    <form action="/index.php/Home/Index/addfile" method="post">
        标题：<input type="text" class="intitle" name="title" /><br />
        作者：<input type="text" class="intauthor" name="author" /><br />
        分类：<select name="type_id" class="type_id">
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select><br />
        内容：<br />
        <script type="text/javascript" src="/Public/plugins/ueditor/ueditor.config.js"></script>
        <script type="text/javascript" src="/Public/plugins/ueditor/ueditor.all.js"></script>
        <textarea id="myEditor" name="content"></textarea>
        <script type="text/javascript" charset="utf-8">
            window.UEDITOR_HOME_URL = "/Public/plugins/ueditor/";
        </script>
        <script language="javascript">
            var editor = new UE.ui.Editor();  //实例化
            editor.render("myEditor");   //生成格式面板
            editor.ready(function(){   // 清空文本域内容
                editor.setContent("");
            });
        </script>
        <br />
        <input type="submit" class="su" value="提交"/>
    </form>
</div>
                <?php elseif(($item == '删除博文')): ?>
                    <?php if(is_array($row)): $i = 0; $__LIST__ = $row;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="rrow">
                            <h1><a href="#"><?php echo ($vo["title"]); ?></a></h1>
                            <p><?php echo (date('Y-m-d H:i:s',$vo["time"])); ?> | <a href="/index.php/Home/Index/del_ok/<?php echo ($vo["id"]); ?>">删除</a></p>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                <?php elseif(($item == '选择更新博文')): ?>
                    <?php if(is_array($row)): $i = 0; $__LIST__ = $row;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="rrow">
                            <h1><a href="#"><?php echo ($vo["title"]); ?></a></h1>
                            <p><?php echo (date('Y-m-d H:i:s',$vo["time"])); ?> | <a href="/index.php/Home/Index/show_update_file/<?php echo ($vo["id"]); ?>">更新</a></p>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                <?php elseif(($item == '详细更新博文')): ?>   
                    <div class="rrow">
    <form action="/index.php/Home/Index/update_ok" method="post">
        标题：<input type="text" class="uptitle" name="title"  value="<?php echo ($data["title"]); ?>" /><input type="hidden" name="id" value="<?php echo ($data["id"]); ?>" /><br />
        作者：<input type="text" class="upauthor" name="author" value="<?php echo ($data["author"]); ?>"/><br />
        <div class="uptype">分类：<?php echo ($type_name); ?></div>
        内容：<br />
        <textarea rows="10" cols="60" class="upcontent" name="content"><?php echo ($data["content"]); ?></textarea><br />
        <input type="submit" class="su" value="提交"/>
    </form>
</div>
                <?php elseif(($item == '显示添加分类')): ?>   
                    <div class="rrow">
    <form action="/index.php/Home/Index/addtype" method="post">
        新分类名：<input type="text" class="upname" name="upname" /><br />        
        <input type="submit" class="su" value="提交"/>
    </form>
</div>
                <?php elseif(($item == '显示分类条目')): ?>   
                    <table>
    <caption>新闻分类</caption>
    <tr>
        <th>序号</th>
        <th>分类名称</th>
        <th>操作</th>
    </tr>
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vo["id"]); ?></td>
            <td><?php echo ($vo["name"]); ?></td>
            <td><a href="/index.php/Home/Index/deltype/<?php echo ($vo["id"]); ?>">删除</a></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>        
                <?php else: ?>
                    <?php if(is_array($row)): $i = 0; $__LIST__ = $row;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="rrow">
                            <h1><a href="#"><?php echo ($vo["title"]); ?></a></h1>
                            <p><?php echo (date('Y-m-d H:i:s',$vo["time"])); ?></p>
                        </div><?php endforeach; endif; else: echo "" ;endif; endif; ?>            
            </div>
            <!-- 底部 -->
            <div class="footer">
                <p>@网站功能模块开发练习题</p>
            </div>
        </div>
    </div>
    </body>
</html>