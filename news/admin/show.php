<?php
include_once('include/config.php');
// 编号
$no = 0;
if(!isset($_GET['id'])) {
    header('location: index.php');
} else {

    $sql = "SELECT * FROM `message` WHERE `id` = '{$_GET['id']}'";
//    var_dump($sql);
    $rs = $link->query($sql);
    $row = $rs->fetch_assoc();
}
include_once('include/header.html');

?>
<div class="r-content">
    <h2>修改新闻内容 Modify News Content</h2>
    <div class="table-wrap">
        <form action="" method="post">
        <table class="table" >
            <tbody>
                <tr><input type="hidden" name="id" class="id" value="<?php echo $_GET['id'];?>"></tr>
                <tr>
                    <td><label for="">标题：</label><input type="text" name="title" class="title" value="<?php echo $row['title'];?>"></td>
                </tr>
                <tr>
                    <td><label for="">作者：</label><input type="text" name="author" class="author" value="<?php echo $row['author'];?>"></td>
                </tr>
                <tr>
<!--                    <td><label for="">内容：</label><input type="text" name="content" class="content" value="--><?php //echo $row['content'];?><!--"></td>-->
                    <td><label for="" class="content-title">内容：</label><textarea name="content" class="content"><?php echo $row['content'];?> </textarea></td>
                </tr>
                <tr>
                    <td><label for="">地点：</label><input type="text" name="address" class="address" value="<?php echo $row['address'];?>"></td>
                </tr>
                <tr>
                    <td>时间：<?php echo date('Y-m-d, H:i:s',$row['time']);?></td>
                </tr>
                <tr>
                    <td><input type="button" value="确定" class="mdf-btn"><input type="button" value="返回" class="return"></td>
                </tr>
            </tbody>
        </form>
        </table>
    </div>
</div>
<?php include_once('include/footer.html');?>