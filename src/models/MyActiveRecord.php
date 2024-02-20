<?php
namespace siripravi\nyiixta\models;
class MyActiveRecord extends \yii\db\ActiveRecord{

    public static function getDb()
    {
        // use the "db2" application component
        return \Yii::$app->getModule('nyiixta')->db;  
    }
}