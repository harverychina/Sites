<?php
include_once('include/config.php');

include_once('include/header.html');
?>
<div class="r-content">
    <h2>发布新闻 Send News</h2>
    <div class="table-wrap">
        <table class="table" >
            <tbody>
            <tr>
                <td><label for="">标题：</label><input type="text" name="title" class="title" value="" placeholder="请输入新闻标题"></td>
            </tr>
            <tr>
                <td><label for="">作者：</label><input type="text" name="author" class="author" value="" placeholder="请输入新闻作者"></td>
            </tr>
            <tr>
                <td><label for="" class="content-title">内容：</label><textarea name="content" class="content" placeholder="请输入新闻内容"></textarea></td>
            </tr>
            <tr>
                <td><label for="">地点：</label><input type="text" name="address" class="address" value="" placeholder="请输入新闻地点"></td>
            </tr>
            <tr>
                <td><input type="button" value="确定" class="send-btn"><input type="button" value="返回" class="return"></td>
            </tr>
            </tbody>
            </form>
        </table>
    </div>
</div>
</div>
<?php include_once('include/footer.html');?>
