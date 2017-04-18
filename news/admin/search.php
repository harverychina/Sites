<?php include_once('include/header.html');?>

<div class="r-content">
    <h2>查询新闻 Search News</h2>
    <form method="post">
        <label for="keyword" class="keyword-title">新闻标题：</label><input type="text" class="keyword" name="keyword"><input type="button" value="查询" class="search-btn">
    </form>
    <div class="table-wrap">
        <table class="table-result"></table>
    </div>
</div>

<?php include_once('include/footer.html'); ?>