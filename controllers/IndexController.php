<?php

namespace app\controllers;

use yii\web\Controller;
use yii\web\Application;

class IndexController extends Controller{

    public function actionIndex(){

        return $this->render('index');
    }
}