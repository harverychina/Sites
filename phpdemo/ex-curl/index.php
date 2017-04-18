<?php
/*
*php curl爬虫程序
*@url 网址
*post_data 提交网址数组
*curl_init 初始化curl
*curl_setopt 请求选项
*curl_exec 执行curl请求
*curl_close 关闭curl请求
*/
$url = "http://localhost/phpdemo/10/post.php";

$post_data = array (
  "blog_name" => "localhost",
  "blog_url" => "http://localhost/phpdemo/10/",
  "action" => "Submit"
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_HEADER, 0);
// 设置请求为post类型
curl_setopt($ch, CURLOPT_POST, 1);
// 添加post数据到请求中
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

// 执行post请求，获得回复
$response= curl_exec($ch);
curl_close($ch);

echo $response;