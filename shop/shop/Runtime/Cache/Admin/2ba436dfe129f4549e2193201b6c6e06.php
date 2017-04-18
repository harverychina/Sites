<?php if (!defined('THINK_PATH')) exit();?><div class="show_good">
    <h3>商品详情</h3>
    <div class="good_list">
        <table>
            <!--  do while 或 while -->
            <?php if(is_array($good_desc_list)): $i = 0; $__LIST__ = $good_desc_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($vo["good_id"]); ?></td>
                    <td><?php echo ($good_name); ?></td>
                    <td><?php echo ($vo["hight"]); ?></td>
                    <td><?php echo ($vo["width"]); ?></td>
                    <td><?php echo ($vo["feature"]); ?></td>
                    <td>[<a href="/shop/index.php/Admin/Index/show_good_desc/<?php echo ($vo["id"]); ?>">更多</a>]</td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
        <!-- 分页栏 -->
        <!--<div class="result page"><?php echo ($Page); ?></div>-->
    </div>
</div>