<?php
namespace app\controllers;
use yii\web\Controller;

class HelloController extends Controller
{
    // 设置公共布局视图文件
    public $layout = 'common';

    public function actionIndex(){
        return $this->render('index');  // $content
    }
    public function actionAbout(){
        return $this->render('about'); // $content
    }

}