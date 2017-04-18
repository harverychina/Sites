<!DOCTYPE html>
<html lang = 'en'>
<head>
    <meta charset="utf-8">
    <title>首页</title>
</head>
<body>
    <!--h1>hello common</h1-->
    <!-- 使用数据块替代上面的内容-->
    <!--?= $this->blocks['block1']; ?-->
    <?php if(isset($this->blocks['block1'])): ?>
        <?= $this->blocks['block1']; ?>
    <?php else: ?>
        <h1>hello Common</h1>
    <?php endif; ?>
    <?= $content; ?>
</body>
</html>