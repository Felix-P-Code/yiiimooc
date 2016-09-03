<?php

namespace app\modules;

/**
 * admin module definition class
 */
class admin extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->layout = 'layout1';
        parent::init();

        // custom initialization code goes here
    }
}