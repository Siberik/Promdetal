<?php 
// models/City.php

namespace app\models;

use yii\db\ActiveRecord;

class City extends ActiveRecord
{
    public static function tableName()
    {
        return 'city';
    }

    public function rules()
    {
        return [
            [['name', 'description', 'img'], 'required'],
            [['name'], 'string', 'max' => 255],
            [['description'], 'string'],
            [['img'], 'url'],
        ];
    }
}

?>