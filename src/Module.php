<?php

namespace siripravi\nyiixta;

use Yii;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'siripravi\nyiixta\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        // $this->layout = '@app/views/layouts/base';	
        parent::init();
        $this->setComponents([
            'db' => [
                'class' => 'yii\db\Connection',
                'dsn' => 'sqlite:@nyiixta/data/invoicedb.db',
                'username' => 'root',
                'password' => '',
                'charset' => 'utf8',
            ]
        ]);
    }
}
