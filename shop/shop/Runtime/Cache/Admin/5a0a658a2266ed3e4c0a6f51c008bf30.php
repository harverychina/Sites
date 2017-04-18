<?php if (!defined('THINK_PATH')) exit();?><div class="search_store">
    <h3>查询商家</h3>
    <div class = "store_search">
        <form action="/shop/index.php/Admin/Index/search_store" method="post">
            商家名：<input type="text" name="search_store_key" id="search_store_key"><input type="submit" value="查询" id="search_store_btn">
        </form>
        <table>
            <tr>
                <th>序号</th>
                <th>商家名</th>
                <th>商家地址</th>
                <th>商家电话</th>
                <th>加盟时间</th>
                <th>操作</th>
            </tr>
        <noempty>
            <?php if(is_array($store_info)): $i = 0; $__LIST__ = $store_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><td>{ $vo.id }</td>
                <td>{ $vo.name }</td>
                <td>{ $vo.address }</td>
                <td>{ $vo.tel }</td>
                <td>{ $vo.time }</td><?php endforeach; endif; else: echo "" ;endif; ?>
        </noempty>
        </table>
    </div>
</div>