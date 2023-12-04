<?php

namespace app\models;

use yii\db\ActiveRecord;

class Blog extends ActiveRecord
{
    public static function tableName()
    {
        return 'blogs';
    }

    public function rules()
    {
        return [
            [['name', 'text'], 'required'],
            ['description', 'string'],
            [['name'], 'string', 'max' => 255],
            [['text'], 'string'],
        ];
    }

    public static function getAllBlogs()
    {
        return static::find()->all();
    }

    public static function findBlogById($id)
    {
        return static::findOne($id);
    }

    public function saveBlog()
    {
        return $this->save();
    }

    public function deleteBlog()
    {
        return $this->delete();
    }
}
