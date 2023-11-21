<?php

namespace app\models;

use yii\db\ActiveRecord;

class Blog extends ActiveRecord
{
    public static function tableName()
    {
        return 'blogs';
    }

    public static function findBlogById($id)
    {
        return static::findOne($id);
    }
}
