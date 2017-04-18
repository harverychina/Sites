<?php
    /*
    * 数组 array 基础
    @ 数组分为：一维数组、二维数组和多维数组
    @ 一位数组定义：数组名 = array([键位值 => 值]) / 其中默认从 0 开始 / 自定义键位值的数组称为关联数组
    @ 二维数组定义：数组名1 = array( array([键位值 => 值]), array([键位值 => 值]), ...)
    @ 多维数组定义：数组名1 = array((数组名2 = array([键位值 => 值], array([键位值 => 值]),...),array((数组名3 = array([键位值 => 值], array([键位值 => 值]),...),...
    */
    // 自定义数组键位值
    // $province = array('1' => '广东', '2' => '湖南');
    $province2 = array('广东', '湖南');
    // 默认从0开始设置键位值
    // $city1 = array('广州','佛山','东莞','中山','珠海','湛江','茂名');
    // $city2 = array('长沙','长沙市','株洲市','湘潭市','衡阳市','邵阳市');
    $city = array(
        array('广州','佛山','东莞','中山','珠海','湛江','茂名'),
        array('长沙','长沙市','株洲市','湘潭市','衡阳市','邵阳市')
    );
    // print_r($city);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>显示数组内容</title>
</head>
<body>
    <h4>显示数组内容</h4>
    <form>
        省份：<select name="province2" id="province">
        <!--?php foreach ($province as $key => $value) { -->

        <?php foreach ($province2 as $key => $value) {
            echo "<option value='".$key."'>".$value."</option>";
        } ?>
        </select>
        <!--?php if (isset($_GET['province'])) {?-->
        <?php if (isset($_GET['province2'])) {?>
        城市：<select name="city" id="city">
        <!--?php switch ($_GET['province']) { 
            case 1:
                foreach ($city1 as $key => $value) {
                    echo "<option value='".$key."'>".$value."</option>";
                };
                break;
            case 2:
                foreach ($city2 as $key => $value) {
                    echo "<option value='".$key."'>".$value."</option>";
                };
                break;
        }?-->
        <?php
        // var_dump ($_GET['province2']);
        foreach ($city[$_GET['province2']] as $key => $value) {
            echo "<option value'".$key."'>".$value."</option>";
        } 
        ?>
        </select>
        <?php } ?>
        <button name="btn">提交</button>
    </form>
</body>
</html>