<?php

namespace app\models;

use yii\db\ActiveRecord;

class Admin extends ActiveRecord
{
    public static function tableName()
    {
        return 'admins';
    }

    public static function findAdminById($id)
    {
        return static::findOne($id);
    }
}
