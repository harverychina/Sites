<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html lang = 'en'>
<head>
    <meta charset="utf-8">
    <title>会员登录</title>
</head>
<body>
    <div class="top-nav">
        <ul>
            <li><?= Html::a('首页', Url::to(['home/index'])); ?></a></li>
            <li><?= Html::a('登录', 'index.php/?r=home/login'); ?></li>
        </ul>
    </div>
    <?= $content; ?>
</body>
</html>