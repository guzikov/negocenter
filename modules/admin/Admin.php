<?php

namespace app\modules\admin;

/**
 * Admin module definition class
 */
class Admin extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        $this->layout = '@app/modules/admin/views/layouts/main';

        // custom initialization code goes here
    }
}
