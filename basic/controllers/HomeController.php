<?php
namespace app\controllers;
use yii\web\Controller;

class HomeController extends Controller
{
    public $layout = 'home';

    public function actionIndex(){
        return $this->render('index');
    }
    public function actionLogin(){
        return $this->render('login');
    }
}