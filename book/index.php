<!-- 数据库配置文件 -->
<?php include_once('libs/config.php');?>
<!-- 引入头部静态文件 -->
<?php include_once('libs/header.html');?>
      <div class="content">
            <h1 class="h1_book_title">图书列表 / 最新上架</h1>
        	<ul>
                <?php
                $sql = "SELECT * FROM `book_info` limit 0,6";
                $rs = $link->query($sql);
                while($row = $rs->fetch_assoc()) {
                ?>
            	<li>
                	<dl>
                    	<dd><a href="#"><img src="Images/<?php echo $row['img'];?>" alt="book" /></a></dd>
                        <dt>
                        	<p class="book_title"><a href="#" target="_blank"><?php echo $row['name'];?></a></p>
                            <p class="book_inline">&#65509;<?php echo $row['price'];?> </p>
                            <a class="book_buy" href="#" target="_blank">BUY</a>
                        </dt>
                    </dl>
                </li>
                <?php } ?>
            </ul>
      </div>
<?php include_once('libs/footer.html');?>