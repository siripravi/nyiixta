<?php

namespace siripravi\nyiixta;

use Yii;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    protected $_isBackend;
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'siripravi\nyiixta\controllers\backend';

    /**
     * @inheritdoc
     */
    public function init()
    {
        // $this->layout = '@app/views/layouts/base';	
        parent::init();
       
        if ($this->getIsBackend() === true) { 
            $this->viewPath = '@siripravi/nyiixta/views/backend';
            $this->setComponents([
                'db' =>[
                    'class' => 'yii\db\Connection',
                    'dsn' => 'sqlite:@nyiixta/data/invoicedb.db',
                    'username' => 'root',
                    'password' => '',
                    'charset' => 'utf8',
                ]
            ]);
         //   Yii::$app->setComponents(['db', Yii::createObject($db2)]);
          } else {
              
              $this->setViewPath('@siripravi/nyiixta/views/frontend');			
          }	
    }

    /**
     * Check if module is used for backend application.
     *
     * @return boolean true if it's used for backend application
     */
    public function getIsBackend()
    {
        if ($this->_isBackend === null) {
            $this->_isBackend = strpos($this->controllerNamespace, 'backend') === false ? false : true;
        }

        return $this->_isBackend;
    }
}