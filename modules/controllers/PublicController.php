<?php
namespace app\modules\controllers;


use yii\web\Controller;

class PublicController extends Controller{


    public function actionLogin(){
        if(\Yii::$app->request>isPost){

        }
        return $this->renderPartial('login');
    }
}